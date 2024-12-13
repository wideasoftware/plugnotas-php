<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Pagamento;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Total;
use TecnoSpeed\Plugnotas\Common\Transporte;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Dto\CupomFiscalReferenciadoDto;
use TecnoSpeed\Plugnotas\Dto\NfeReferenciadaDto;
use TecnoSpeed\Plugnotas\Nfe;

interface INfeBuilder
{
    /**
     * @param string $idIntegracao
     * @return self
     */
    public function setIdIntegracao(string $idIntegracao): self;

    /**
     * @param string $finalidade
     * @return self
     */
    public function setFinalidade(string $finalidade): self;

    /**
     * @param string $natureza
     * @return self
     */
    public function setNatureza(string $natureza): self;

    /**
     * @param string $dataEmissao
     * @return self
     */
    public function setDataEmissao(string $dataEmissao): self;

    /**
     * @param string $presencial
     * @return self
     */
    public function setPresencial(string $presencial): self;

    /**
     * @param bool $consumidorFinal
     * @return self
     */
    public function setConsumidorFinal(bool $consumidorFinal): self;

    /**
     * @param NfeReferenciadaDto[]|null $nfe
     * @param CupomFiscalReferenciadoDto[]|null $cupomFiscal
     * @return self
     */
    public function setNotaReferenciada(?array $nfe, ?array $cupomFiscal): self;

    /**
     * @param Pessoa $emitente
     * @return self
     */
    public function setEmitente(Pessoa $emitente): self;

    /**
     * @param Pessoa $destinatario
     * @return self
     */
    public function setDestinatario(Pessoa $destinatario): self;

    /**
     * @param Item[] $itens
     * @return self
     */
    public function setItens(array $itens): self;

    /**
     * @param Total|null $total
     * @return self
     */
    public function setTotal(?Total $total): self;

    /**
     * @param Transporte|null $transporte
     * @return self
     */
    public function setTransporte(?Transporte $transporte): self;

    /**
     * @param Pagamento[] $pagamentos
     * @return self
     */
    public function setPagamentos(array $pagamentos): self;

    /**
     * @param string|null $informacoesComplementares
     * @return self
     */
    public function setInformacoesComplementares(?string $informacoesComplementares): self;

    /**
     * @param Pessoa|null $intermediadorTransacao
     * @return self
     */
    public function setIntermediadorTransacao(?Pessoa $intermediadorTransacao): self;

    /**
     * @param int|null $intermediador
     * @return self
     */
    public function setIntermediador(?int $intermediador): self;

    /**
     * @param Configuration $configuracao
     * @return self
     */
    public function setConfiguracao(Configuration $configuracao): self;

    public function build(): Nfe;
}
