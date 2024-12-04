<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Nfe;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\FormasDePagamentoEnum;
use TecnoSpeed\Plugnotas\Enums\ModalidadeFreteEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;
use TecnoSpeed\Plugnotas\Interfaces\INfeBuilder;

class NfeBuilder implements INfeBuilder
{
    private string $idIntegracao;
    private FinalidadeNfeEnum $finalidade;
    private string $natureza;
    private string $dataEmissao;
    private PresencialEnum $presencial;
    private bool $consumidorFinal;
    private Pessoa $emitente;
    private Pessoa $destinatario;
    private Item $itens;
    /**
     * @var array|float[]|null[]
     */
    private array $retencoes;
    private array $transporte;
    private array $pagamentos;
    private string $informacoesComplementares;
    private array $intermediadorTransacao;
    private int $intermediador;
    private Configuration $configuration;

    public function setIdIntegracao(string $idIntegracao): INfeBuilder
    {
        $this->idIntegracao = $idIntegracao;
        return $this;
    }

    public function setFinalidade(FinalidadeNfeEnum $finalidade): INfeBuilder
    {
        $this->finalidade = $finalidade;
        return $this;
    }

    public function setNatureza(string $natureza): INfeBuilder
    {
        $this->natureza = $natureza;
        return $this;
    }

    public function setDataEmissao(string $dataEmissao): INfeBuilder
    {
        $this->dataEmissao = $dataEmissao;
        return $this;
    }

    public function setPresencial(PresencialEnum $presencial): INfeBuilder
    {
        $this->presencial = $presencial;
        return $this;
    }

    public function setConsumidorFinal(bool $consumidorFinal): INfeBuilder
    {
        $this->consumidorFinal = $consumidorFinal;
        return $this;
    }

    public function setEmitente(Pessoa $emitente): INfeBuilder
    {
        $this->emitente = $emitente;
        return $this;
    }

    public function setDestinatario(Pessoa $destinatario): INfeBuilder
    {
        $this->destinatario = $destinatario;
        return $this;
    }

    public function setItens(Item $itens): INfeBuilder
    {
        $this->itens = $itens;
        return $this;
    }

    public function setRetencoes(?float $pisRetido, ?float $cofinsRetido, ?float $irrfRetido, ?float $csllRetido, ?float $prevSocialRetido): INfeBuilder
    {
        $this->retencoes = [
            'valorPisRetido' => $pisRetido,
            'valorCofinsRetido' => $cofinsRetido,
            'valorIrrfRetido' => $irrfRetido,
            'valorCsllRetido' => $csllRetido,
            'valorPrevidenciaRetido' => $prevSocialRetido,
        ];

        return $this;
    }

    public function setTransporte
    (
        ModalidadeFreteEnum $modalidadeFrete,
        ?Pessoa             $transportador,
        ?string             $placaVeiculo,
        ?string             $ufPlaca,
        ?string             $rntc,
        ?float              $quantidadeVolTransp,
        ?string             $EspTransp,
        ?string             $marcaVolTransp,
        ?string             $NumVolTransp,
        ?float              $pesoLiquido,
        ?float              $pesoBruto,
    ): INfeBuilder
    {
        $this->transporte = [
            'modalidadeFrete' => $modalidadeFrete,
            'transportador' => $transportador,
            'veiculo' => [
                'placa' => $placaVeiculo,
                'uf' => $ufPlaca,
                'rntc' => $rntc,
            ],
            'volumes' => [
                'quantidade' => $quantidadeVolTransp,
                'especie' => $EspTransp,
                'marca' => $marcaVolTransp,
                'numeracao' => $NumVolTransp,
                'pesoLiquido' => $pesoLiquido,
                'pesoBruto' => $pesoBruto,
            ]
        ];

        return $this;
    }

    public function setPagamentos(FormasDePagamentoEnum $meio, ?string $descricaoMeio, float $valor, ?string $data): INfeBuilder
    {
        $this->pagamentos = [
            'meio' => $meio,
            'descricaoMeio' => $descricaoMeio,
            'valor' => $valor,
            'data' => $data,
        ];

        return $this;
    }

    public function setInformacoesComplementares(string $informacoesComplementares): INfeBuilder
    {
        $this->informacoesComplementares = $informacoesComplementares;
        return $this;
    }

    public function setIntermediadorTransacao(Pessoa $intermediadorTransacao): INfeBuilder
    {
        $this->intermediadorTransacao = [
            'cpfCnpj' => $intermediadorTransacao->getCpfCnpj(),
            'identificadorCadastro' => $intermediadorTransacao->getNome(),
        ];

        return $this;
    }

    public function setIntermediador(int $intermediador): INfeBuilder
    {
        $this->intermediador = $intermediador;
        return $this;
    }

    public function setConfiguration(Configuration $configuration): INfeBuilder
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function build(): Nfe
    {
        return new Nfe
        (
            idIntegracao: $this->idIntegracao,
            finalidade: $this->finalidade,
            natureza: $this->natureza,
            dataEmissao: $this->dataEmissao,
            presencial: $this->presencial,
            consumidorFinal: $this->consumidorFinal,
            emitente: $this->emitente,
            destinatario: $this->destinatario,
            itens: $this->itens,
            retencoes: $this->retencoes,
            transporte: $this->transporte,
            pagamentos: $this->pagamentos,
            informacoesComplementares: $this->informacoesComplementares,
            intermediadorTransacao: $this->intermediadorTransacao,
            intermediador: $this->intermediador,
            configuration: $this->configuration,
        );
    }
}
