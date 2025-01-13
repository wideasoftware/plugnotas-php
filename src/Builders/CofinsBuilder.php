<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Impostos\Cofins;
use TecnoSpeed\Plugnotas\Enums\CstCofinsEnum;

class CofinsBuilder
{
    private CstCofinsEnum $cst;
    private ?array $baseCalculo = null;
    private ?float $aliquota = null;

    public function setCst(CstCofinsEnum $cst): CofinsBuilder
    {
        $this->cst = $cst;
        return $this;
    }

    public function setBaseCalculo(?float $valorBaseCalculo): CofinsBuilder
    {
        $this->baseCalculo = [
            'valor' => $valorBaseCalculo,
        ];
        return $this;
    }

    public function setAliquota(?float $aliquota): CofinsBuilder
    {
        $this->aliquota = $aliquota;
        return $this;
    }

    public function build(): Cofins
    {
        return new Cofins
        (
            cst: $this->cst,
            baseCalculo: $this->baseCalculo,
            aliquota: $this->aliquota
        );
    }


}
