<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Common\Tributos;

readonly class ItemDto
{
    /**
     * @param string|null $codigo
     * @param string|null $descricao
     * @param string|null $ncm
     * @param string|null $cest
     * @param string|null $cfop
     * @param float|null $valor
     * @param Tributos|null $tributos
     * @param float|null $valorFrete
     * @param float|null $valorSeguro
     * @param float|null $valorDesconto
     * @param float|null $valorOutros
     * @param ComercialETributavelDto|null $quantidade
     * @param ComercialETributavelDto|null $valorUnitario
     */
    public function __construct
    (
        public ?string                  $codigo,
        public ?string                  $descricao,
        public ?string                  $ncm,
        public ?string                  $cest,
        public ?string                  $cfop,
        public ?float                   $valor,
        public ?Tributos                $tributos,
        public ?float                   $valorFrete,
        public ?float                   $valorSeguro,
        public ?float                   $valorDesconto,
        public ?float                   $valorOutros,
        public ?ComercialETributavelDto $quantidade,
        public ?ComercialETributavelDto $valorUnitario,
    )
    {
    }
}
