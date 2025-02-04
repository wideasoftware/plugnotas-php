<?php

namespace TecnoSpeed\Plugnotas\Builders\Empresa;

use TecnoSpeed\Plugnotas\Empresa\Nfse;
use TecnoSpeed\Plugnotas\Empresa\Config;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

class NfseBuilder
{
    use DataTransform;

    private bool $ativo;
    private Config $config;

    public function setAtivo(bool $ativo): NfseBuilder
    {
        $this->ativo = $ativo;
        return $this;
    }

    public function setConfig(Config $config): NfseBuilder
    {
        $this->config = $config;
        return $this;
    }

    public function build(): Nfse
    {
        return new Nfse(
            ativo: $this->ativo,
            tipoContrato: 0,
            config: $this->config,
        );
    }
}
