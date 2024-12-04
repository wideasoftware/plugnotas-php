<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\EstadoEnum;
use TecnoSpeed\Plugnotas\Enums\TipoLogradouroEnum;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

class EnderecoV2
{
    use DataTransform;
    /**
     * @var TipoLogradouroEnum|null
     */
    private ?TipoLogradouroEnum $tipoLogradouro;
    /**
     * @var string|null
     */
    private ?string $logradouro;
    /**
     * @var string|null
     */
    private ?string $numero;
    /**
     * @var string|null
     */
    private ?string $complemento;
    /**
     * @var string|null
     */
    private ?string $tipoBairro;
    /**
     * @var string|null
     */
    private ?string $bairro;
    /**
     * @var string|null
     */
    private ?string $codigoPais;
    /**
     * @var string|null
     */
    private ?string $descricaoPais;
    /**
     * @var string|null
     */
    private ?string $codigoCidade;
    /**
     * @var string|null
     */
    private ?string $descricaoCidade;
    /**
     * @var EstadoEnum|null
     */
    private ?EstadoEnum $estado;
    /**
     * @var string|null
     */
    private ?string $cep;

    /**
     * @param TipoLogradouroEnum|null $tipoLogradouro
     * @param string|null $logradouro
     * @param string|null $numero
     * @param string|null $complemento
     * @param string|null $tipoBairro
     * @param string|null $bairro
     * @param string|null $codigoPais
     * @param string|null $descricaoPais
     * @param string|null $codigoCidade
     * @param string|null $descricaoCidade
     * @param EstadoEnum|null $estado
     * @param string|null $cep
     */
    public function __construct
    (
        ?TipoLogradouroEnum $tipoLogradouro,
        ?string             $logradouro,
        ?string             $numero,
        ?string             $complemento,
        ?string             $tipoBairro,
        ?string             $bairro,
        ?string             $codigoPais,
        ?string             $descricaoPais,
        ?string             $codigoCidade,
        ?string             $descricaoCidade,
        ?EstadoEnum         $estado,
        ?string         $cep,
    )
    {
        $this->tipoLogradouro = $tipoLogradouro;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->tipoBairro = $tipoBairro;
        $this->bairro = $bairro;
        $this->codigoPais = $codigoPais;
        $this->descricaoPais = $descricaoPais;
        $this->codigoCidade = $codigoCidade;
        $this->descricaoCidade = $descricaoCidade;
        $this->estado = $estado;
        $this->cep = $cep;
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
