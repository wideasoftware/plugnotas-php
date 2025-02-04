<?php

namespace TecnoSpeed\Plugnotas\Empresa;

use TecnoSpeed\Plugnotas\Dto\Empresa\RpsDto;
use TecnoSpeed\Plugnotas\Dto\Empresa\PrefeituraDto;

readonly class Config
{
    public function __construct(
        private RpsDto        $rps,
        private PrefeituraDto $prefeitura,
        private bool          $producao,
    )
    {
    }
    public function getRps(): ?RpsDto
    {
        return $this->rps;
    }

    public function getPrefeitura(): ?PrefeituraDto
    {
        return $this->prefeitura;
    }

    public function getProducao(): bool
    {
        return $this->producao;
    }
}
