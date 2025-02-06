<?php

namespace TecnoSpeed\Plugnotas\Empresa;

use TecnoSpeed\Plugnotas\Traits\DataTransform;

readonly class Nfse
{
    use DataTransform;

    public function __construct(
        private bool   $ativo,
        private int    $tipoContrato,
        private Config $config)
    {

    }

    public function getAtivo(): bool
    {
        return $this->ativo;
    }

    public function getTipoContrato(): int
    {
        return $this->tipoContrato;
    }

    public function getConfig(): Config
    {
        return $this->config;
    }
}
