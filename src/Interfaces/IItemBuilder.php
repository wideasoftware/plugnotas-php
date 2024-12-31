<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Impostos;
use TecnoSpeed\Plugnotas\Common\Tributos;

interface IItemBuilder
{
    /**
     * @param string|null $codigo
     * @return self
     */
    public function setCodigo(?string $codigo): self;

    /**
     * @param string|null $codigoBarras
     * @return self
     */
    public function setCodigoBarras(?string $codigoBarras): self;

    /**
     * @param string|null $codigoBarrasTributavel
     * @return self
     */
    public function setCodigoBarrasTributavel(?string $codigoBarrasTributavel): self;

    /**
     * @param string|null $descricao
     * @return self
     */
    public function setDescricao(?string $descricao): self;

    /**
     * @param string|null $ncm
     * @return self
     */
    public function setNcm(?string $ncm): self;

    /**
     * @param string|null $cest
     * @return self
     */
    public function setCest(?string $cest): self;

    /**
     * @param string|null $cfop
     * @return self
     */
    public function setCfop(?string $cfop): self;

    /**
     * @param float|null $valor
     * @return self
     */
    public function setValor(?float $valor): self;

    /**
     * @param Tributos|null $tributos
     * @return self
     */
    public function setTributos(?Tributos $tributos): self;

    /**
     * @param bool|null $compoeTotal
     * @return self
     */
    public function setCompoeTotal(?bool $compoeTotal): self;

    /**
     * @param string|null $codigoBeneficioFiscal
     * @return self
     */
    public function setCodigoBeneficioFiscal(?string $codigoBeneficioFiscal): self;

    /**
     * @param float|null $valorFrete
     * @return self
     */
    public function setValorFrete(?float $valorFrete): self;

    /**
     * @param float|null $valorSeguro
     * @return self
     */
    public function setValorSeguro(?float $valorSeguro): self;

    /**
     * @param float|null $valorDesconto
     * @return self
     */
    public function setValorDesconto(?float $valorDesconto): self;

    /**
     * @param float|null $valorOutros
     * @return self
     */
    public function setValorOutros(?float $valorOutros): self;

    /**
     * @param float|null $comercial
     * @param float|null $tributavel
     * @return self
     */
    public function setUnidade(?float $comercial, ?float $tributavel): self;

    /**
     * @param float|null $comercial
     * @param float|null $tributavel
     * @return self
     */
    public function setQuantidade(?float $comercial, ?float $tributavel): self;

    /**
     * @param float|null $comercial
     * @param float|null $tributavel
     * @return self
     */
    public function setValorUnitario(?float $comercial, ?float $tributavel): self;

    public function build(): Item;

}
