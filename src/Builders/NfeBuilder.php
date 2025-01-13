<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Pagamento;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Total;
use TecnoSpeed\Plugnotas\Common\Transporte;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\IntermediadorEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Nfe;
use TecnoSpeed\Plugnotas\Validators\ValidaNfe;

class NfeBuilder
{
    private string $idIntegracao;
    private FinalidadeNfeEnum $finalidade = FinalidadeNfeEnum::NFE_NORMAL;
    private string $natureza;
    private string $dataEmissao;
    private PresencialEnum $presencial = PresencialEnum::OPERACAO_NAO_PRESENCIAL_OUTROS;
    private bool $consumidorFinal = true;
    private Pessoa $emitente;
    private Pessoa $destinatario;
    private array $itens;
    private ?Total $total = null;
    private ?Transporte $transporte = null;
    private array $pagamentos;
    private ?string $informacoesComplementares = null;
    private ?Pessoa $intermediadorTransacao = null;
    private ?IntermediadorEnum $intermediador = null;
    private Configuration $configuracao;

    /**
     * @param string $idIntegracao
     * @return NfeBuilder
     */
    public function setIdIntegracao(string $idIntegracao): NfeBuilder
    {
        $this->idIntegracao = $idIntegracao;
        return $this;
    }

    /**
     * @param string|null $finalidade
     * @return NfeBuilder
     */
    public function setFinalidade(?string $finalidade): NfeBuilder
    {
        $this->finalidade = FinalidadeNfeEnum::from($finalidade);
        return $this;
    }

    /**
     * @param string $natureza
     * @return NfeBuilder
     */
    public function setNatureza(string $natureza): NfeBuilder
    {
        $this->natureza = $natureza;
        return $this;
    }

    /**
     * @param string $dataEmissao
     * @return NfeBuilder
     */
    public function setDataEmissao(string $dataEmissao): NfeBuilder
    {
        $this->dataEmissao = $dataEmissao;
        return $this;
    }

    /**
     * @param string|null $presencial
     * @return NfeBuilder
     */
    public function setPresencial(?string $presencial): NfeBuilder
    {
        $this->presencial = PresencialEnum::from($presencial);
        return $this;
    }

    /**
     * @param bool $consumidorFinal
     * @return NfeBuilder
     */
    public function setConsumidorFinal(?bool $consumidorFinal): NfeBuilder
    {
        $this->consumidorFinal = $consumidorFinal;
        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setEmitente(Pessoa $emitente): NfeBuilder
    {
        ValidaNfe::validaEmitente($emitente);

        $this->emitente = $emitente;
        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setDestinatario(Pessoa $destinatario): NfeBuilder
    {
        ValidaNfe::validaDestinatario($destinatario);

        $this->destinatario = $destinatario;
        return $this;
    }

    /**
     * @param Item[] $itens
     * @return NfeBuilder
     * @throws ValidationError
     */
    public function setItens(array $itens): NfeBuilder
    {
        ValidaNfe::validaItens($itens);

        $this->itens = $itens;
        return $this;
    }

    /**
     * @param Total|null $total
     * @return NfeBuilder
     */
    public function setTotal(?Total $total): NfeBuilder
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param Transporte|null $transporte
     * @return NfeBuilder
     */
    public function setTransporte(?Transporte $transporte): NfeBuilder
    {
        $this->transporte = $transporte;

        return $this;
    }

    /**
     * @param Pagamento[] $pagamentos
     * @return NfeBuilder
     * @throws ValidationError
     */
    public function setPagamentos(array $pagamentos): NfeBuilder
    {
        ValidaNfe::validaPagamentos($pagamentos);

        $this->pagamentos = $pagamentos;
        return $this;
    }

    /**
     * @param string|null $informacoesComplementares
     * @return NfeBuilder
     */
    public function setInformacoesComplementares(?string $informacoesComplementares): NfeBuilder
    {
        $this->informacoesComplementares = $informacoesComplementares;
        return $this;
    }

    /**
     * @param Pessoa|null $intermediadorTransacao
     * @return NfeBuilder
     */
    public function setIntermediadorTransacao(?Pessoa $intermediadorTransacao): NfeBuilder
    {
        $this->intermediadorTransacao = $intermediadorTransacao;
        return $this;
    }

    /**
     * @param int|null $intermediador
     * @return NfeBuilder
     */
    public function setIntermediador(?int $intermediador): NfeBuilder
    {
        $this->intermediador = IntermediadorEnum::from($intermediador);
        return $this;
    }

    /**
     * @param string $ambiente
     * @param string $apiKey
     * @return NfeBuilder
     */
    public function setConfiguracao(string $ambiente, string $apiKey): NfeBuilder
    {
        $this->configuracao = new Configuration($ambiente, $apiKey);
        return $this;
    }

    /**
     * @return Nfe
     */
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
            total: $this->total,
            transporte: $this->transporte,
            pagamentos: $this->pagamentos,
            informacoesComplementares: $this->informacoesComplementares,
            intermediadorTransacao: $this->intermediadorTransacao,
            intermediador: $this->intermediador,
            config: $this->configuracao
        );
    }
}
