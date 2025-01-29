<?php

namespace TecnoSpeed\Plugnotas\Dto;

class ConfiguracoesNfseDto
{
    public function __construct
    (
        public ?ConfiguracaoRpsDto $rps,
        public ?PrefeituraDto      $prefeitura,
        public bool                $producao,
        public bool                $ativo,
        public string              $tipoContrato
    )
    {
    }
}
