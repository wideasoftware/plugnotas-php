<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Pagamento;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Total;
use TecnoSpeed\Plugnotas\Common\Transporte;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Dto\CupomFiscalReferenciadoDto;
use TecnoSpeed\Plugnotas\Dto\NfeDto;
use TecnoSpeed\Plugnotas\Dto\NfeReferenciadaDto;
use TecnoSpeed\Plugnotas\Dto\NotaReferenciadaDto;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\IntermediadorEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Nfe;
use TecnoSpeed\Plugnotas\Validators\ValidaNfe;

class NfeBuilder
{
    /**
     * @var string
     */
    private string $idIntegracao;
    /**
     * @var FinalidadeNfeEnum
     */
    private FinalidadeNfeEnum $finalidade;
    /**
     * @var string
     */
    private string $natureza;
    /**
     * @var string
     */
    private string $dataEmissao;
    /**
     * @var PresencialEnum
     */
    private PresencialEnum $presencial;
    /**
     * @var bool
     */
    private bool $consumidorFinal;
    /**
     * @var NotaReferenciadaDto|null
     */
    private ?NotaReferenciadaDto $notaReferenciada;
    /**
     * @var Pessoa
     */
    private Pessoa $emitente;
    /**
     * @var Pessoa
     */
    private Pessoa $destinatario;
    /**
     * @var Item[]
     */
    private array $itens;
    /**
     * @var Total
     */
    private Total $total;
    /**
     * @var Transporte
     */
    private Transporte $transporte;
    /**
     * @var Pagamento[]
     */
    private array $pagamentos;
    /**
     * @var string
     */
    private string $informacoesComplementares;
    /**
     * @var Pessoa
     */
    private Pessoa $intermediadorTransacao;
    /**
     * @var IntermediadorEnum
     */
    private IntermediadorEnum $intermediador;
    /**
     * @var Configuration
     */
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
     * @param string $finalidade
     * @return NfeBuilder
     */
    public function setFinalidade(string $finalidade): NfeBuilder
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
     * @param string $presencial
     * @return NfeBuilder
     */
    public function setPresencial(string $presencial): NfeBuilder
    {
        $this->presencial = PresencialEnum::from($presencial);
        return $this;
    }

    /**
     * @param bool $consumidorFinal
     * @return NfeBuilder
     */
    public function setConsumidorFinal(bool $consumidorFinal): NfeBuilder
    {
        $this->consumidorFinal = $consumidorFinal;
        return $this;
    }

    /**
     * @param NfeReferenciadaDto[]|null $nfe
     * @param CupomFiscalReferenciadoDto[]|null $cupomFiscal
     * @return NfeBuilder
     */
    public function setNotaReferenciada(?array $nfe, ?array $cupomFiscal): NfeBuilder
    {
        $this->notaReferenciada = new NotaReferenciadaDto($nfe, $cupomFiscal);
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
     * @param Configuration $configuracao
     * @return NfeBuilder
     */
    public function setConfiguracao(Configuration $configuracao): NfeBuilder
    {
        $this->configuracao = $configuracao;
        return $this;
    }

    /**
     * @return Nfe
     */
    public function build(): Nfe
    {
        $nfeDto = new NfeDto
        (
            idIntegracao: $this->idIntegracao,
            finalidade: $this->finalidade,
            natureza: $this->natureza,
            dataEmissao: $this->dataEmissao,
            presencial: $this->presencial,
            consumidorFinal: $this->consumidorFinal,
            notaReferenciada: $this->notaReferenciada,
            emitente: $this->emitente,
            destinatario: $this->destinatario,
            itens: $this->itens,
            total: $this->total,
            transporte: $this->transporte,
            pagamentos: $this->pagamentos,
            informacoesComplementares: $this->informacoesComplementares,
            intermediadorTransacao: $this->intermediadorTransacao,
            intermediador: $this->intermediador,
        );

        return new Nfe($nfeDto, $this->configuracao);
    }
}
