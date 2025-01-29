<?php

namespace TecnoSpeed\Plugnotas\Nfse;

use Exception;
use Respect\Validation\Validator as v;
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

    public function getRps(): ?ConfiguracaoRpsDto
    {
        return $this->dto->rps;
    }

    public function getPrefeitura(): ?PrefeituraDto
    {
        return $this->dto->prefeitura;
    }

    public function getProducao(): bool
    {
        return $this->dto->producao;
    }

    public function getAtivo(): bool
    {
        return $this->dto->ativo;
    }

    public function getTipoContrato(): int
    {
        return $this->dto->tipoContrato;
    }
}
