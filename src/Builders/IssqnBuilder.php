<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Impostos\Issqn;

class IssqnBuilder
{
    private float $valor;
    private float $aliquota;
    private float $baseCalculo;
    private string $codigoServico;
    private string $codigoMunicipioFatoGerador;
    private string $codigoExigibilidade;

    public function setValor(float $valor): IssqnBuilder
    {
        $this->valor = $valor;
        return $this;
    }

    public function setAliquota(float $aliquota): IssqnBuilder
    {
        $this->aliquota = $aliquota;
        return $this;
    }

    public function setBaseCalculo(float $baseCalculo): IssqnBuilder
    {
        $this->baseCalculo = $baseCalculo;
        return $this;
    }

    public function setCodigoServico(string $codigoServico): IssqnBuilder
    {
        $this->codigoServico = $codigoServico;
        return $this;
    }

    public function setCodigoMunicipioFatoGerador(string $codigoMunicipioFatoGerador): IssqnBuilder
    {
        $this->codigoMunicipioFatoGerador = $codigoMunicipioFatoGerador;
        return $this;
    }

    public function setCodigoExigibilidade(string $codigoExigibilidade): IssqnBuilder
    {
        $this->codigoExigibilidade = $codigoExigibilidade;
        return $this;
    }

    public function build(): Issqn
    {
        return new Issqn
        (
            valor: $this->valor,
            aliquota: $this->aliquota,
            baseCalculo: $this->baseCalculo,
            codigoServico: $this->codigoServico,
            codigoMunicipioFatoGerador: $this->codigoMunicipioFatoGerador,
            codigoExigibilidade: $this->codigoExigibilidade,
        );
    }


}
