<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\EstadoEnum;

readonly class Veiculo
{
    /**
     * @param string|null $placa
     * @param EstadoEnum|null $uf
     * @param string|null $rntc
     */
    public function __construct
    (
        private ?string $placa,
        private ?EstadoEnum $uf,
        private ?string $rntc,
    )
    {
    }

    /**
     * @return string|null
     */
    public function getPlaca(): ?string
    {
        return $this->placa;
    }

    /**
     * @return string|null
     */
    public function getUf(): ?string
    {
        return $this->uf;
    }

    /**
     * @return string|null
     */
    public function getRntc(): ?string
    {
        return $this->rntc;
    }


}
