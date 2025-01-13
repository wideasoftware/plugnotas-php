<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\EstadoEnum;
use TecnoSpeed\Plugnotas\Enums\TipoLogradouroEnum;

readonly class EnderecoV2
{
    public function __construct
    (
        private ?TipoLogradouroEnum $tipoLogradouro,
        private ?string             $logradouro,
        private ?string             $numero,
        private ?string             $complemento,
        private ?string             $tipoBairro,
        private ?string             $bairro,
        private ?string             $codigoPais,
        private ?string             $descricaoPais,
        private ?string             $codigoCidade,
        private ?string             $descricaoCidade,
        private ?EstadoEnum         $estado,
        private ?string             $cep,
    )
    {
    }

    /**
     * @return TipoLogradouroEnum|null
     */
    public function getTipoLogradouro(): ?TipoLogradouroEnum
    {
        return $this->tipoLogradouro;
    }


    /**
     * @return string|null
     */
    public function getLogradouro(): ?string
    {
        return $this->logradouro;
    }


    /**
     * @return string|null
     */
    public function getNumero(): ?string
    {
        return $this->numero;
    }


    /**
     * @return string|null
     */
    public function getComplemento(): ?string
    {
        return $this->complemento;
    }


    /**
     * @return string|null
     */
    public function getTipoBairro(): ?string
    {
        return $this->tipoBairro;
    }


    /**
     * @return string|null
     */
    public function getBairro(): ?string
    {
        return $this->bairro;
    }


    /**
     * @return string|null
     */
    public function getCodigoPais(): ?string
    {
        return $this->codigoPais;
    }


    /**
     * @return string|null
     */
    public function getDescricaoPais(): ?string
    {
        return $this->descricaoPais;
    }

    /**
     * @return string|null
     */
    public function getCodigoCidade(): ?string
    {
        return $this->codigoCidade;
    }


    /**
     * @return string|null
     */
    public function getDescricaoCidade(): ?string
    {
        return $this->descricaoCidade;
    }

    /**
     * @return EstadoEnum|null
     */
    public function getEstado(): ?EstadoEnum
    {
        return $this->estado;
    }


    /**
     * @return string|null
     */
    public function getCep(): ?string
    {
        return $this->cep;
    }

}
