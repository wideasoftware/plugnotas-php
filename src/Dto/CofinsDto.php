<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Enums\CstCofinsEnum;

readonly class CofinsDto
{
    public function __construct
    (
        public ?CstCofinsEnum $cst,
        public ?array         $baseCalculo,
        public ?float         $aliquota
    )
    {
    }
}
