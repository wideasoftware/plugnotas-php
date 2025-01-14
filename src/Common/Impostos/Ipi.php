<?php

namespace TecnoSpeed\Plugnotas\Common\Impostos;

use TecnoSpeed\Plugnotas\Enums\CstIpiEnum;

readonly class Ipi
{
    public function __construct
    (
        private string     $codigoEnquadramentoLegal,
        private CstIpiEnum $cst,
        private ?float     $baseCalculo,
        private ?float     $aliquota
    )
    {
    }

    public function getCodigoEnquadramentoLegal(): string
    {
        return $this->codigoEnquadramentoLegal;
    }

    public function getCst(): CstIpiEnum
    {
        return $this->cst;
    }

    public function getBaseCalculo(): ?float
    {
        return $this->baseCalculo;
    }

    public function getAliquota(): ?float
    {
        return $this->aliquota;
    }


}
