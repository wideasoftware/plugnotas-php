<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Efetivo;
use TecnoSpeed\Plugnotas\Common\Icms;
use TecnoSpeed\Plugnotas\Common\SubstituicaoTributaria;
use TecnoSpeed\Plugnotas\Enums\CstEnum;
use TecnoSpeed\Plugnotas\Enums\OrigemEnum;

interface IIcmsBuilder
{
    /**
     * @param OrigemEnum $origem
     * @return self
     */
    public function setOrigem(OrigemEnum $origem): self;

    /**
     * @param CstEnum $cst
     * @return self
     */
    public function setCst(CstEnum $cst): self;

    /**
     * @param float $percentual
     * @param float $valor
     * @return self
     */
    public function setCreditoSimplesNacional(float $percentual, float $valor): self;

    /**
     * @param SubstituicaoTributaria $substituicaoTributaria
     * @return self
     */
    public function setSubstituicaoTributaria(SubstituicaoTributaria $substituicaoTributaria): self;

    /**
     * @param float $valor
     * @return self
     */
    public function setValor(float $valor): self;

    /**
     * @param float $bc_percentual_reducao
     * @param float $bc_valor
     * @param float $aliquota
     * @return self
     */
    public function setEfetivo(float $bc_percentual_reducao, float $bc_valor, float $aliquota): self;

    public function build(): Icms;
}
