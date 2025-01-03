<?php

namespace TecnoSpeed\Plugnotas\Dto;

class PrefeituraDto
{
    public function __construct(
        public ?string $login,
        public ?string $senha
    )
    {
    }
}
