<?php

namespace TecnoSpeed\Plugnotas\Common;

class Issqn
{
    /**
     * @var float
     */
    private float $valor;
    /**
     * @var float
     */
    private float $aliquota;
    /**
     * @var float
     */
    private float $baseCalculo;
    /**
     * @var string
     */
    private string $codigoServico;
    /**
     * @var string
     */
    private string $codigoMunicipioFatoGerador;
    /**
     * @var string
     */
    private string $codigoExigibilidade;

    /**
     * @param float $valor
     * @param float $aliquota
     * @param float $baseCalculo
     * @param string $codigoServico
     * @param string $codigoMunicipioFatoGerador
     * @param string $codigoExigibilidade
     */
    public function __construct
    (
        float  $valor,
        float  $aliquota,
        float  $baseCalculo,
        string $codigoServico,
        string $codigoMunicipioFatoGerador,
        string $codigoExigibilidade,
    )
    {
        $this->valor = $valor;
        $this->aliquota = $aliquota;
        $this->baseCalculo = $baseCalculo;
        $this->codigoServico = $codigoServico;
        $this->codigoMunicipioFatoGerador = $codigoMunicipioFatoGerador;
        $this->codigoExigibilidade = $codigoExigibilidade;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @return float
     */
    public function getAliquota(): float
    {
        return $this->aliquota;
    }

    /**
     * @return float
     */
    public function getBaseCalculo(): float
    {
        return $this->baseCalculo;
    }

    /**
     * @return string
     */
    public function getCodigoServico(): string
    {
        return $this->codigoServico;
    }

    /**
     * @return string
     */
    public function getCodigoMunicipioFatoGerador(): string
    {
        return $this->codigoMunicipioFatoGerador;
    }

    /**
     * @return string
     */
    public function getCodigoExigibilidade(): string
    {
        return $this->codigoExigibilidade;
    }

}
