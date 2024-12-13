<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\SubstituicaoTributaria;

interface ISubstituicaoTributariaBuilder
{
    /**
     * @param float|null $valor
     * @return self
     */
    public function setBaseCalculo(?float $valor): self;

    /**
     * @param float|null $valor
     * @return self
     */
    public function setAliquota(?float $valor): self;

    /**
     * @param float|null $valor
     * @return self
     */
    public function setValor(?float $valor): self;

    /**
     * @param float|null $bc_valor
     * @param float|null $aliquota
     * @param float|null $valor
     * @return self
     */
    public function setFundoCombatePobreza(?float $bc_valor, ?float $aliquota, ?float $valor): self;

    public function build(): SubstituicaoTributaria;
}
