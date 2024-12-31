<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\ModalidadeFreteEnum;

readonly class Transporte
{
    /**
     * @param ModalidadeFreteEnum $modalidadeFrete
     * @param Pessoa|null $transportador
     * @param Veiculo|null $veiculo
     * @param Volume[]|null $volumes
     */
    public function __construct
    (
        private ModalidadeFreteEnum $modalidadeFrete,
        private ?Pessoa             $transportador,
        private ?Veiculo            $veiculo,
        private ?array              $volumes
    )
    {
    }

    /**
     * @return ModalidadeFreteEnum
     */
    public function getModalidadeFrete(): ModalidadeFreteEnum
    {
        return $this->modalidadeFrete;
    }

    /**
     * @return Pessoa|null
     */
    public function getTransportador(): ?Pessoa
    {
        return $this->transportador;
    }

    /**
     * @return Veiculo|null
     */
    public function getVeiculo(): ?Veiculo
    {
        return $this->veiculo;
    }

    /**
     * @return Volume[]|null
     */
    public function getVolumes(): ?array
    {
        return $this->volumes;
    }


}
