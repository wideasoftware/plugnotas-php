<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Impostos;
use TecnoSpeed\Plugnotas\Common\Tributos;

interface IItemBuilder
{
    /**
     * @param string $codigo
     * @return self
     */
    public function setCodigo(string $codigo): self;

    /**
     * @param string $codigoBarras
     * @return self
     */
    public function setCodigoBarras(string $codigoBarras): self;

    /**
     * @param string $codigoBarrasTributavel
     * @return self
     */
    public function setCodigoBarrasTributavel(string $codigoBarrasTributavel): self;

    /**
     * @param string $descricao
     * @return self
     */
    public function setDescricao(string $descricao): self;

    /**
     * @param string $ncm
     * @return self
     */
    public function setNcm(string $ncm): self;

    /**
     * @param string $cest
     * @return self
     */
    public function setCest(string $cest): self;

    /**
     * @param string $cfop
     * @return self
     */
    public function setCfop(string $cfop): self;

    /**
     * @param float $valor
     * @return self
     */
    public function setValor(float $valor): self;

    /**
     * @param Tributos $tributos
     * @return self
     */
    public function setTributos(Tributos $tributos): self;

    /**
     * @param bool $compoeTotal
     * @return self
     */
    public function setCompoeTotal(bool $compoeTotal): self;

    /**
     * @param string $codigoBeneficioFiscal
     * @return self
     */
    public function setCodigoBeneficioFiscal(string $codigoBeneficioFiscal): self;

    /**
     * @param float $valorFrete
     * @return self
     */
    public function setValorFrete(float $valorFrete): self;

    /**
     * @param float $valorSeguro
     * @return self
     */
    public function setValorSeguro(float $valorSeguro): self;

    /**
     * @param float $valorDesconto
     * @return self
     */
    public function setValorDesconto(float $valorDesconto): self;

    /**
     * @param float $valorOutros
     * @return self
     */
    public function setValorOutros(float $valorOutros): self;

    /**
     * @param float $comercial
     * @param float $tributavel
     * @return self
     */
    public function setUnidade(float $comercial, float $tributavel): self;

    /**
     * @param float $comercial
     * @param float $tributavel
     * @return self
     */
    public function setQuantidade(float $comercial, float $tributavel): self;

    /**
     * @param float $comercial
     * @param float $tributavel
     * @return self
     */
    public function setValorUnitario(float $comercial, float $tributavel): self;

    public function build(): Item;

}
