<?php

namespace TecnoSpeed\Plugnotas\Dto;

readonly class PartilhaDto
{
    public function __construct
    (
        public ?float $baseCalculoIcms,
        public ?float $percentualIcmsFcp,
        public ?float $aliquotaInterna,
        public ?float $aliquotaInterestadual,

    )
    {
    }
}
