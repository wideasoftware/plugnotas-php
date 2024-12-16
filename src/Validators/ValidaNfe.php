<?php

namespace TecnoSpeed\Plugnotas\Validators;

use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Traits\Validation;

class ValidaNfe
{
    use Validation;

    /**
     * @throws ValidationError
     */
    public static function validaEmitente(Pessoa $emitente): void
    {
        if (empty($emitente->getCpfCnpj())) {
            throw new ValidationError('CPF ou CNPJ do emitente é obrigatorio.');
        }
    }

    /**
     * @throws ValidationError
     */
    public static function validaDestinatario(Pessoa $destinatario): void
    {
        $erros = [];
        $cpfCnpj = $destinatario->getCpfCnpj();

        if (!self::isValidCpfCnpj($cpfCnpj)) {
            $erros[] = 'CPF/CNPJ do destinatário informado não é válido.';
        }

        $endereco = $destinatario->getEndereco();

        $regrasParaOEndereco = [
            'bairro' => [$endereco?->getBairro(), fn($value) => empty($value)],
            'cep' => [$endereco?->getCep(), fn($value) => empty($value)],
            'codigoCidade' => [$endereco?->getCodigoCidade(), fn($value) => empty($value)],
            'estado' => [$endereco?->getEstado(), fn($value) => empty($value)],
            'logradouro' => [$endereco?->getLogradouro(), fn($value) => empty($value)],
            'numero' => [$endereco?->getNumero(), fn($value) => empty($value)],
            'tipoLogradouro' => [$endereco?->getTipoLogradouro(), fn($value) => empty($value)],
        ];

        foreach ($regrasParaOEndereco as $campo => [$valor, $regra]) {
            if ($regra($valor)) {
                $erros[] = "{$campo} do destinatário informado não é válido.";
            }
        }

        if (!empty($erros)) {
            throw new ValidationError('Erros no destinatário: ' . implode(', ', $erros));
        }
    }

    /**
     * @throws ValidationError
     */
    public static function validaPagamentos(array $pagamentos): void
    {
        $erros = [];

        foreach ($pagamentos as $index => $pagamento) {
            if (empty($pagamento['meio'])) {
                $erros[] = "O pagamento na posição {$index} está sem o atributo 'meio'.";
            }

            if (!isset($pagamento['valor']) || !is_numeric($pagamento['valor']) || $pagamento['valor'] <= 0) {
                $erros[] = "O pagamento na posição {$index} está com o atributo 'valor' inválido.";
            }
        }

        if (!empty($erros)) {
            throw new ValidationError(implode(' ', $erros));
        }
    }

    /**
     * @throws ValidationError
     */
    public static function validaItens(array $itens): void
    {
        $erros = [];

        foreach ($itens as $index => $item) {
            if (empty($item['descricao'])) {
                $erros[] = "O item na posição {$index} está sem o atributo 'descricao'.";
            }

            if (empty($item['ncm'])) {
                $erros[] = "O item na posição {$index} está sem o atributo 'ncm'.";
            }

            if (empty($item['cfop'])) {
                $erros[] = "O item na posição {$index} está sem o atributo 'cfop'.";
            }

            if (empty($item['valorUnitario'])) {
                $erros[] = "O item na posição {$index} está sem o atributo 'valorUnitario'.";
            }

            if (empty($item['tributos'])) {
                $erros[] = "O item na posição {$index} está sem o atributo 'tributos'.";
            }

        }

        if (!empty($erros)) {
            throw new ValidationError(implode(' ', $erros));
        }
    }
}
