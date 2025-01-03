<?php

namespace TecnoSpeed\Plugnotas\Dto;

class ConfiguracaoRpsDto
{

    /**
     * @param int|null $lote
     * @param NumeracaoRpsDto[]|null $numeracao
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
}
