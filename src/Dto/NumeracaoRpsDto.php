<?php

namespace TecnoSpeed\Plugnotas\Dto;

class NumeracaoRpsDto
{
    public function __construct(
        public int $numero,
        public string $serie
    )
    {
    }
}
