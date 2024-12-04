<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\SubstituicaoTributaria;
use TecnoSpeed\Plugnotas\Interfaces\ISubstituicaoTributariaBuilder;

class SubstituicaoTributariaBuilder implements ISubstituicaoTributariaBuilder
{
    /**
     * @var array
     */
    private array $baseCalculo;

    /**
     * @var float
     */
    private float $aliquota;

    /**
     * @var float
     */
    private float $valor;

    /**
     * @var array
     */
    private array $fundoCombatePobreza;

    /**
     * @param float $valor
     * @return ISubstituicaoTributariaBuilder
     */
    public function setBaseCalculo(float $valor): ISubstituicaoTributariaBuilder
    {
        $this->baseCalculo = [
            'valor' => $valor,
        ];

        return $this;
    }

    /**
     * @param float $valor
     * @return ISubstituicaoTributariaBuilder
     */
    public function setAliquota(float $valor): ISubstituicaoTributariaBuilder
    {
        $this->aliquota = $valor;

        return $this;
    }

    /**
     * @param float $valor
     * @return ISubstituicaoTributariaBuilder
     */
    public function setValor(float $valor): ISubstituicaoTributariaBuilder
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * @param float $bc_valor
     * @param float $aliquota
     * @param float|null $valor
     * @return ISubstituicaoTributariaBuilder
     */
    public function setFundoCombatePobreza(float $bc_valor, float $aliquota, ?float $valor): ISubstituicaoTributariaBuilder
    {
        $this->fundoCombatePobreza = [
            'baseCalculo' => [
                'valor' => $bc_valor,
            ],
            'aliquota' => $aliquota,
            'valor' => $valor,
        ];

        return $this;
    }

    /**
     * @return SubstituicaoTributaria
     */
    public function build(): SubstituicaoTributaria
    {
        return new SubstituicaoTributaria
        (
            baseCalculo: $this->baseCalculo,
            aliquota: $this->aliquota,
            valor: $this->valor,
            fundoCombatePobreza: $this->fundoCombatePobreza,
        );
    }
}
