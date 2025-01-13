<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Impostos\SubstituicaoTributaria;

class SubstituicaoTributariaBuilder
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
     * @param float|null $valor
     * @return SubstituicaoTributariaBuilder
     */
    public function setBaseCalculo(?float $valor): SubstituicaoTributariaBuilder
    {
        $this->baseCalculo = [
            'valor' => $valor,
        ];

        return $this;
    }

    /**
     * @param float|null $valor
     * @return SubstituicaoTributariaBuilder
     */
    public function setAliquota(?float $valor): SubstituicaoTributariaBuilder
    {
        $this->aliquota = $valor;

        return $this;
    }

    /**
     * @param float|null $valor
     * @return SubstituicaoTributariaBuilder
     */
    public function setValor(?float $valor): SubstituicaoTributariaBuilder
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * @param float|null $bc_valor
     * @param float|null $aliquota
     * @param float|null $valor
     * @return SubstituicaoTributariaBuilder
     */
    public function setFundoCombatePobreza(?float $bc_valor, ?float $aliquota, ?float $valor): SubstituicaoTributariaBuilder
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
