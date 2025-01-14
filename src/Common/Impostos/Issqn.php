<?php

namespace TecnoSpeed\Plugnotas\Common\Impostos;

readonly class Issqn
{
    public function __construct
    (
        private float  $valor,
        private float  $aliquota,
        private float  $baseCalculo,
        private string $codigoServico,
        private string $codigoMunicipioFatoGerador,
        private string $codigoExigibilidade,
    )
    {
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function getAliquota(): float
    {
        return $this->aliquota;
    }

    public function getBaseCalculo(): float
    {
        return $this->baseCalculo;
    }

    public function getCodigoServico(): string
    {
        return $this->codigoServico;
    }

    public function getCodigoMunicipioFatoGerador(): string
    {
        return $this->codigoMunicipioFatoGerador;
    }

    public function getCodigoExigibilidade(): string
    {
        return $this->codigoExigibilidade;
    }
}
