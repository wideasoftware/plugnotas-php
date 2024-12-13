<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Veiculo;
use TecnoSpeed\Plugnotas\Enums\EstadoEnum;

class VeiculoBuilder
{
    /**
     * @var string|null
     */
    private ?string $placa;
    /**
     * @var EstadoEnum|null
     */
    private ?EstadoEnum $uf;
    /**
     * @var string|null
     */
    private ?string $rntc;

    /**
     * @param string|null $placa
     * @return $this
     */
    public function setPlaca(?string $placa): VeiculoBuilder
    {
        $this->placa = $placa;
        return $this;
    }

    /**
     * @param string|null $uf
     * @return $this
     */
    public function setUf(?string $uf): VeiculoBuilder
    {
        $this->uf = EstadoEnum::from($uf);
        return $this;
    }

    /**
     * @param string|null $rntc
     * @return $this
     */
    public function setRntc(?string $rntc): VeiculoBuilder
    {
        $this->rntc = $rntc;
        return $this;
    }

    /**
     * @return Veiculo
     */
    public function build(): Veiculo
    {
        return new Veiculo
        (
            placa: $this->placa,
            uf: $this->uf,
            rntc: $this->rntc,
        );
    }


}
