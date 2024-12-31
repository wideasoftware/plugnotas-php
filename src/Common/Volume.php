<?php

namespace TecnoSpeed\Plugnotas\Common;
readonly class Volume
{
    /**
     * @param int|null $quantidade
     * @param string|null $especie
     * @param string|null $marca
     * @param string|null $numeracao
     * @param float|null $pesoLiquido
     * @param float|null $pesoBruto
     */
    public function __construct
    (
        private ?int    $quantidade,
        private ?string $especie,
        private ?string $marca,
        private ?string $numeracao,
        private ?float  $pesoLiquido,
        private ?float  $pesoBruto,
    )
    {
    }

    /**
     * @return int|null
     */
    public function getQuantidade(): ?int
    {
        return $this->quantidade;
    }

    /**
     * @return string|null
     */
    public function getEspecie(): ?string
    {
        return $this->especie;
    }

    /**
     * @return string|null
     */
    public function getMarca(): ?string
    {
        return $this->marca;
    }

    /**
     * @return string|null
     */
    public function getNumeracao(): ?string
    {
        return $this->numeracao;
    }

    /**
     * @return float|null
     */
    public function getPesoLiquido(): ?float
    {
        return $this->pesoLiquido;
    }

    /**
     * @return float|null
     */
    public function getPesoBruto(): ?float
    {
        return $this->pesoBruto;
    }
}
