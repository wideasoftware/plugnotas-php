<?php

namespace TecnoSpeed\Plugnotas\Dto;

readonly class ComercialETributavelDto
{
    /**
     * @param float|null $comercial
     * @param float|null $tributavel
     */
    public function __construct
    (
        public ?float $comercial,
        public ?float $tributavel
    )
    {
    }
}
