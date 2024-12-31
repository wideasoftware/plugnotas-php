<?php

namespace TecnoSpeed\Plugnotas\Dto;

readonly class IssqnDto
{
    public function __construct
    (
        public ?float  $valor,
        public ?float  $aliquota,
        public ?float  $baseCalculo,
        public ?string $codigoServico,
        public ?string $codigoMunicipioFatoGerador,
        public ?string $codigoExigibilidade,
    )
    {
    }
}
