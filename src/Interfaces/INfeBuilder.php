<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;

interface INfeBuilder
{
    /**
     * @param string $integracao
     * @return self
     */
    public function setIdIntegracao(string $integracao): self;

    /**
     * @param FinalidadeNfeEnum $finalidade
     * @return self
     */
    public function setFinalidade(FinalidadeNfeEnum $finalidade): self;

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
     * @param PresencialEnum $presencial
     * @return self
     */
    public function setPresencial(PresencialEnum $presencial): self;

    /**
     * @param bool $consumidorFinal
     * @return self
     */
    public function setConsumidorFinal(bool $consumidorFinal): self;

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
     * @param Item $itens
     * @return self
     */
    public function setItens(Item $itens): self;

    /**
     * @param array $retencoes
     * @return self
     */
    public function setRetencoes(array $retencoes): self;

    /**
     * @param array $transporte
     * @return self
     */
    public function setTransporte(array $transporte): self;

    /**
     * @param array $pagamentos
     * @return self
     */
    public function setPagamentos(array $pagamentos): self;

    /**
     * @param string $informacoesComplementares
     * @return self
     */
    public function setInformacoesComplementares(string $informacoesComplementares): self;

    /**
     * @param array $intermediadorTransacao
     * @return self
     */
    public function setIntermediadorTransacao(array $intermediadorTransacao): self;

    /**
     * @param int $intermediador
     * @return self
     */
    public function setIntermediador(int $intermediador): self;

    /**
     * @param Configuration $configuration
     * @return self
     */
    public function setConfiguration(Configuration $configuration): self;
}
