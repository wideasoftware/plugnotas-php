<?php

namespace TecnoSpeed\Plugnotas\Dto;

readonly class NotaReferenciadaDto
{
    /**
     * @param NfeReferenciadaDto[]|null $nfe
     * @param CupomFiscalReferenciadoDto[]|null $cupomFiscal
     */
    public function __construct
    (
        public ?array $nfe,
        public ?array $cupomFiscal,
    )
    {

    }
}
