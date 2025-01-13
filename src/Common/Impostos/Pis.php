<?php

namespace TecnoSpeed\Plugnotas\Common\Impostos;

use TecnoSpeed\Plugnotas\Enums\CstPisEnum;

readonly class Pis
{
    public function __construct
    (
        public CstPisEnum $cst,
        public ?array     $baseCalculo,
        public ?float     $aliquota
    )
    {
    }
    public function getCst(): CstPisEnum
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
