<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Volume;

class VolumeBuilder
{
    /**
     * @var int|null
     */
    private ?int $quantidade;
    /**
     * @var string|null
     */
    private ?string $especie;
    /**
     * @var string|null
     */
    private ?string $marca;
    /**
     * @var string|null
     */
    private ?string $numeracao;
    /**
     * @var float|null
     */
    private ?float $pesoLiquido;
    /**
     * @var float|null
     */
    private ?float $pesoBruto;

    /**
     * @param int|null $quantidade
     * @return $this
     */
    public function setQuantidade(?int $quantidade): VolumeBuilder
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * @param string|null $especie
     * @return $this
     */
    public function setEspecie(?string $especie): VolumeBuilder
    {
        $this->especie = $especie;
        return $this;
    }

    /**
     * @param string|null $marca
     * @return $this
     */
    public function setMarca(?string $marca): VolumeBuilder
    {
        $this->marca = $marca;
        return $this;
    }

    /**
     * @param string|null $numeracao
     * @return $this
     */
    public function setNumeracao(?string $numeracao): VolumeBuilder
    {
        $this->numeracao = $numeracao;
        return $this;
    }

    /**
     * @param float|null $pesoLiquido
     * @return $this
     */
    public function setPesoLiquido(?float $pesoLiquido): VolumeBuilder
    {
        $this->pesoLiquido = $pesoLiquido;
        return $this;
    }

    /**
     * @param float|null $pesoBruto
     * @return $this
     */
    public function setPesoBruto(?float $pesoBruto): VolumeBuilder
    {
        $this->pesoBruto = $pesoBruto;
        return $this;
    }

    /**
     * @return Volume
     */
    public function build(): Volume
    {
        return new Volume
        (
            quantidade: $this->quantidade,
            especie: $this->especie,
            marca: $this->marca,
            numeracao: $this->numeracao,
            pesoLiquido: $this->pesoLiquido,
            pesoBruto: $this->pesoBruto,
        );
    }
}
