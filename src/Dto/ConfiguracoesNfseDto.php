<?php

namespace TecnoSpeed\Plugnotas\Dto;

class ConfiguracoesNfseDto
{
    public function __construct
    (
        public ?bool               $nfseNacional,
        public ?bool               $consultaNfseNacional,
        public ?ConfiguracaoRpsDto $rps,
        public ?PrefeituraDto      $prefeitura,
        public ?array              $email,
        public bool                $producao,
        public bool                $ativo,
        public string              $tipoContrato
    )
    {
    }
}
