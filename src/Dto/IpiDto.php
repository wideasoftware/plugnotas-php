<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Enums\CstIpiEnum;

readonly class IpiDto
{
    public function __construct
    (
        public ?string     $codigoEnquadramentoLegal,
        public ?CstIpiEnum $cst,
        public ?float      $baseCalculo,
        public ?float      $aliquota
    )
    {
    }
}
