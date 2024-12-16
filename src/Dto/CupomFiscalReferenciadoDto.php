<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Enums\ModeloCupomReferenciadoEnum;

readonly class CupomFiscalReferenciadoDto
{
    public function __construct
    (
        public ?ModeloCupomReferenciadoEnum $modelo,
        public ?string                      $numeroOrdemSequencia,
        public ?string                      $numeroContador,
    )
    {
    }
}
