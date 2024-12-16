<?php

namespace TecnoSpeed\Plugnotas\Dto;

readonly class TelefoneDto
{
    public function __construct
    (
        public string  $numero,
        public ?string $ddd = null,
    )
    {
    }
}
