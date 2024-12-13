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
use TecnoSpeed\Plugnotas\Interfaces\INfeBuilder;
use TecnoSpeed\Plugnotas\Nfe;
use TecnoSpeed\Plugnotas\Validators\ValidaNfe;

class NfeBuilder implements INfeBuilder
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
     * @return INfeBuilder
     */
    public function setIdIntegracao(string $idIntegracao): INfeBuilder
    {
        $this->idIntegracao = $idIntegracao;
        return $this;
    }

    /**
     * @param string $finalidade
     * @return INfeBuilder
     */
    public function setFinalidade(string $finalidade): INfeBuilder
    {
        $this->finalidade = FinalidadeNfeEnum::from($finalidade);
        return $this;
    }

    /**
     * @param string $natureza
     * @return INfeBuilder
     */
    public function setNatureza(string $natureza): INfeBuilder
    {
        $this->natureza = $natureza;
        return $this;
    }

    /**
     * @param string $dataEmissao
     * @return INfeBuilder
     */
    public function setDataEmissao(string $dataEmissao): INfeBuilder
    {
        $this->dataEmissao = $dataEmissao;
        return $this;
    }

    /**
     * @param string $presencial
     * @return INfeBuilder
     */
    public function setPresencial(string $presencial): INfeBuilder
    {
        $this->presencial = PresencialEnum::from($presencial);
        return $this;
    }

    /**
     * @param bool $consumidorFinal
     * @return INfeBuilder
     */
    public function setConsumidorFinal(bool $consumidorFinal): INfeBuilder
    {
        $this->consumidorFinal = $consumidorFinal;
        return $this;
    }

    /**
     * @param NfeReferenciadaDto[]|null $nfe
     * @param CupomFiscalReferenciadoDto[]|null $cupomFiscal
     * @return INfeBuilder
     */
    public function setNotaReferenciada(?array $nfe, ?array $cupomFiscal): INfeBuilder
    {
        $this->notaReferenciada = new NotaReferenciadaDto($nfe, $cupomFiscal);
        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setEmitente(Pessoa $emitente): INfeBuilder
    {
        ValidaNfe::validaEmitente($emitente);

        $this->emitente = $emitente;
        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setDestinatario(Pessoa $destinatario): INfeBuilder
    {
        ValidaNfe::validaDestinatario($destinatario);

        $this->destinatario = $destinatario;
        return $this;
    }

    /**
     * @param Item[] $itens
     * @return INfeBuilder
     */
    public function setItens(array $itens): INfeBuilder
    {
        $this->itens = $itens;
        return $this;
    }

    /**
     * @param Total|null $total
     * @return INfeBuilder
     */
    public function setTotal(?Total $total): INfeBuilder
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param Transporte|null $transporte
     * @return INfeBuilder
     */
    public function setTransporte(?Transporte $transporte): INfeBuilder
    {
        $this->transporte = $transporte;

        return $this;
    }

    /**
     * @param Pagamento[] $pagamentos
     * @return INfeBuilder
     * @throws ValidationError
     */
    public function setPagamentos(array $pagamentos): INfeBuilder
    {
        ValidaNfe::validaPagamentos($pagamentos);

        $this->pagamentos = $pagamentos;
        return $this;
    }

    /**
     * @param string|null $informacoesComplementares
     * @return INfeBuilder
     */
    public function setInformacoesComplementares(?string $informacoesComplementares): INfeBuilder
    {
        $this->informacoesComplementares = $informacoesComplementares;
        return $this;
    }

    /**
     * @param Pessoa|null $intermediadorTransacao
     * @return INfeBuilder
     */
    public function setIntermediadorTransacao(?Pessoa $intermediadorTransacao): INfeBuilder
    {
        $this->intermediadorTransacao = $intermediadorTransacao;
        return $this;
    }

    /**
     * @param int|null $intermediador
     * @return INfeBuilder
     */
    public function setIntermediador(?int $intermediador): INfeBuilder
    {
        $this->intermediador = IntermediadorEnum::from($intermediador);
        return $this;
    }

    /**
     * @param Configuration $configuracao
     * @return INfeBuilder
     */
    public function setConfiguracao(Configuration $configuracao): INfeBuilder
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
