<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Dto\EnderecoDto;
use TecnoSpeed\Plugnotas\Enums\EstadoEnum;
use TecnoSpeed\Plugnotas\Enums\TipoLogradouroEnum;

readonly class EnderecoV2
{
    /**
     * @param EnderecoDto $enderecoDto
     */
    public function __construct(private EnderecoDto $enderecoDto)
    {
    }

    /**
     * @return string|null
     */
    public function getTipoLogradouro(): ?string
    {
        return $this->enderecoDto->tipoLogradouro->value;
    }


    /**
     * @return string|null
     */
    public function getLogradouro(): ?string
    {
        return $this->enderecoDto->logradouro;
    }


    /**
     * @return string|null
     */
    public function getNumero(): ?string
    {
        return $this->enderecoDto->numero;
    }


    /**
     * @return string|null
     */
    public function getComplemento(): ?string
    {
        return $this->enderecoDto->complemento;
    }


    /**
     * @return string|null
     */
    public function getTipoBairro(): ?string
    {
        return $this->enderecoDto->tipoBairro;
    }


    /**
     * @return string|null
     */
    public function getBairro(): ?string
    {
        return $this->enderecoDto->bairro;
    }


    /**
     * @return string|null
     */
    public function getCodigoPais(): ?string
    {
        return $this->enderecoDto->codigoPais;
    }


    /**
     * @return string|null
     */
    public function getDescricaoPais(): ?string
    {
        return $this->enderecoDto->descricaoPais;
    }

    /**
     * @return string|null
     */
    public function getCodigoCidade(): ?string
    {
        return $this->enderecoDto->codigoCidade;
    }


    /**
     * @return string|null
     */
    public function getDescricaoCidade(): ?string
    {
        return $this->enderecoDto->descricaoCidade;
    }

    /**
     * @return string|null
     */
    public function getEstado(): ?string
    {
        return $this->enderecoDto->estado->value;
    }


    /**
     * @return string|null
     */
    public function getCep(): ?string
    {
        return $this->enderecoDto->cep;
    }

}
