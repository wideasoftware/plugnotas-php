<?php

namespace TecnoSpeed\Plugnotas\Dto\Empresa;

use TecnoSpeed\Plugnotas\Traits\DataTransform;

class RpsDto
{
    use DataTransform;

    /**
     * @param int|null $lote
     * @param array|null $numeracao
     */
    public function __construct(
        public ?int $lote,
        public ?array $numeracao,
    )
    {

    }

    public function getLote(): ?int
    {
        return $this->lote;
    }

    public function getNumeracao(): ?array
    {
        return $this->numeracao;
    }
}
