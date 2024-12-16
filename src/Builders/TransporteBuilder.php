<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Transporte;
use TecnoSpeed\Plugnotas\Common\Veiculo;
use TecnoSpeed\Plugnotas\Common\Volume;
use TecnoSpeed\Plugnotas\Enums\ModalidadeFreteEnum;

class TransporteBuilder
{
    /**
     * @var ModalidadeFreteEnum
     */
    private ModalidadeFreteEnum $modalidadeFrete;
    /**
     * @var Pessoa|null
     */
    private ?Pessoa $transportador;
    /**
     * @var Veiculo|null
     */
    private ?Veiculo $veiculo;
    /**
     * @var Volume[]|null
     */
    private ?array $volumes;

    /**
     * @param string $modalidadeFrete
     * @return $this
     */
    public function setModalidadeFrete(string $modalidadeFrete): TransporteBuilder
    {
        $this->modalidadeFrete = ModalidadeFreteEnum::from($modalidadeFrete);
        return $this;
    }

    /**
     * @param Pessoa|null $transportador
     * @return $this
     */
    public function setTransportador(?Pessoa $transportador): TransporteBuilder
    {
        $this->transportador = $transportador;
        return $this;
    }

    /**
     * @param Veiculo|null $veiculo
     * @return $this
     */
    public function setVeiculo(?Veiculo $veiculo): TransporteBuilder
    {
        $this->veiculo = $veiculo;
        return $this;
    }

    /**
     * @param Volume[]|null $volumes
     * @return $this
     */
    public function setVolumes(?array $volumes): TransporteBuilder
    {
        $this->volumes = $volumes;
        return $this;
    }

    /**
     * @return Transporte
     */
    public function build(): Transporte
    {
        return new Transporte
        (
            modalidadeFrete: $this->modalidadeFrete,
            transportador: $this->transportador,
            veiculo: $this->veiculo,
            volumes: $this->volumes,
        );
    }
}
