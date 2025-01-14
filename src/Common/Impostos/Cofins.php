<?php

namespace TecnoSpeed\Plugnotas\Common\Impostos;

use TecnoSpeed\Plugnotas\Enums\CstCofinsEnum;

readonly class Cofins
{
    public function __construct
    (
        private CstCofinsEnum $cst,
        private ?array        $baseCalculo,
        private ?float        $aliquota
    )
    {
    }

    public function getCst(): CstCofinsEnum
    {
        return $this->cst;
    }

    public function getBaseCalculo(): ?array
    {
        return $this->baseCalculo;
    }

    public function getAliquota(): ?float
    {
        return $this->aliquota;
    }

}
