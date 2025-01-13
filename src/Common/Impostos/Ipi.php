<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\CstIpiEnum;

class Ipi
{
    public function __construct
    (
        public string     $codigoEnquadramentoLegal,
        public CstIpiEnum $cst,
        public ?float     $baseCalculo,
        public ?float     $aliquota
    )
    {
    }
}
