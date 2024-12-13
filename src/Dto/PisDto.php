<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Enums\CstPisEnum;

readonly class PisDto
{
    public function __construct
    (
        public ?CstPisEnum $cst,
        public ?array      $baseCalculo,
        public ?float      $aliquota
    )
    {
    }
}
