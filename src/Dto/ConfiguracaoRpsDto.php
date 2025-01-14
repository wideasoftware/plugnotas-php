<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Traits\DataTransform;

class ConfiguracaoRpsDto
{
use DataTransform;

    /**
     * @param int|null $lote
     * @param array|null $numeracao
     * @param bool|null $numeracaoAutomatica
     * @param bool|null $agrupaLoteAutomatico
     * @param bool|null $agrupaLoteComSerieAutomatico
     */
    public function __construct(
        public ?int $lote,
        public ?array $numeracao,
        public ?bool $numeracaoAutomatica,
        public ?bool $agrupaLoteAutomatico,
        public ?bool $agrupaLoteComSerieAutomatico
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

    public function getNumeracaoAutomatica(): ?bool
    {
        return $this->numeracaoAutomatica;
    }

    public function getAgrupaLoteAutomatico(): ?bool
    {
        return $this->agrupaLoteAutomatico;
    }

    public function getAgrupaLoteComSerieAutomatico(): ?bool
    {
        return $this->agrupaLoteComSerieAutomatico;
    }
}
