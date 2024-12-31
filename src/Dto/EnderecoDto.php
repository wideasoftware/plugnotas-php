<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Enums\EstadoEnum;
use TecnoSpeed\Plugnotas\Enums\TipoLogradouroEnum;

readonly class EnderecoDto
{
    public function __construct
    (
        public ?TipoLogradouroEnum $tipoLogradouro,
        public ?string             $logradouro,
        public ?string             $numero,
        public ?string             $complemento,
        public ?string             $tipoBairro,
        public ?string             $bairro,
        public ?string             $codigoPais,
        public ?string             $descricaoPais,
        public ?string             $codigoCidade,
        public ?string             $descricaoCidade,
        public ?EstadoEnum         $estado,
        public ?string             $cep,
    )
    {
    }
}
