<?php

namespace TecnoSpeed\Plugnotas\Nfse;

use TecnoSpeed\Plugnotas\Dto\ConfiguracaoRpsDto;
use TecnoSpeed\Plugnotas\Dto\ConfiguracoesNfseDto;
use TecnoSpeed\Plugnotas\Dto\PrefeituraDto;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

readonly class ConfiguracoesNfse
{
    use DataTransform;

    public function __construct(
        private ConfiguracoesNfseDto $dto
    )
    {
    }

    public function getNfseNacional(): ?bool
    {
        return $this->dto->nfseNacional;
    }

    public function getConsultaNfseNacional(): ?bool
    {
        return $this->dto->consultaNfseNacional;
    }

    public function getRps(): ?ConfiguracaoRpsDto
    {
        return $this->dto->rps;
    }

    public function getPrefeitura(): ?PrefeituraDto
    {
        return $this->dto->prefeitura;
    }

    public function getEmail(): ?array
    {
        return $this->dto->email;
    }

    public function getProducao(): ?bool
    {
        return $this->dto->producao;
    }
}
