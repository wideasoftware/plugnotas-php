<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Impostos\Pis;
use TecnoSpeed\Plugnotas\Enums\CstPisEnum;

class PisBuilder
{
    private CstPisEnum $cst;
    private ?array $baseCalculo = null;
    private ?float $aliquota = null;

    public function setCst(CstPisEnum $cst): PisBuilder
    {
        $this->cst = $cst;
        return $this;
    }

    public function setValorBaseCalculo(?float $valorBaseCalculo): PisBuilder
    {
        $this->baseCalculo = [
            'valor' => $valorBaseCalculo,
        ];

        return $this;
    }

    public function setAliquota(?float $aliquota): PisBuilder
    {
        $this->aliquota = $aliquota;
        return $this;
    }

    public function build(): Pis
    {
        return new Pis
        (
            cst: $this->cst,
            baseCalculo: $this->baseCalculo,
            aliquota: $this->aliquota
        );
    }


}
