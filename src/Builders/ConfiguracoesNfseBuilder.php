<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Dto\ConfiguracaoRpsDto;
use TecnoSpeed\Plugnotas\Dto\ConfiguracoesNfseDto;
use TecnoSpeed\Plugnotas\Dto\PrefeituraDto;
use TecnoSpeed\Plugnotas\Nfse\ConfiguracoesNfse;

class ConfiguracoesNfseBuilder
{
    private ?bool $nfseNacional = null;
    private ?bool $consultaNfseNacional = null;
    private ?ConfiguracaoRpsDto $rps = null;
    private ?PrefeituraDto $prefeitura = null;
    private ?array $email = null;
    private ?bool $producao = null;

    public function setNfseNacional(?bool $nfseNacional): ConfiguracoesNfseBuilder
    {
        $this->nfseNacional = $nfseNacional;
        return $this;
    }

    public function setConsultaNfseNacional(?bool $consultaNfseNacional): ConfiguracoesNfseBuilder
    {
        $this->consultaNfseNacional = $consultaNfseNacional;
        return $this;
    }

    public function setRps(?ConfiguracaoRpsDto $rps): ConfiguracoesNfseBuilder
    {
        $this->rps = $rps;
        return $this;
    }

    public function setPrefeitura(?PrefeituraDto $prefeitura): ConfiguracoesNfseBuilder
    {
        $this->prefeitura = $prefeitura;
        return $this;
    }

    public function setEmail(?array $email): ConfiguracoesNfseBuilder
    {
        $this->email = $email;
        return $this;
    }

    public function setProducao(?bool $producao): ConfiguracoesNfseBuilder
    {
        $this->producao = $producao;
        return $this;
    }

    public function build(): ConfiguracoesNfse
    {
        $configuracoesNfseDto = new ConfiguracoesNfseDto(
            nfseNacional: $this->nfseNacional,
            consultaNfseNacional: $this->consultaNfseNacional,
            rps: $this->rps,
            prefeitura: $this->prefeitura,
            email: $this->email,
            producao: $this->producao
        );
        return new ConfiguracoesNfse($configuracoesNfseDto);
    }
}
