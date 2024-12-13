<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Icms;
use TecnoSpeed\Plugnotas\Common\SubstituicaoTributaria;
use TecnoSpeed\Plugnotas\Enums\CstIcmsEnum;
use TecnoSpeed\Plugnotas\Enums\OrigemEnum;
use TecnoSpeed\Plugnotas\Interfaces\IIcmsBuilder;

class IcmsBuilder implements IIcmsBuilder
{
    /**
     * @var OrigemEnum
     */
    private OrigemEnum $origem;

    /**
     * @var CstIcmsEnum
     */
    private CstIcmsEnum $cst;

    /**
     * @var array
     */
    private array $creditoSimplesNacional;

    /**
     * @var SubstituicaoTributaria
     */
    private SubstituicaoTributaria $substituicaoTributaria;

    /**
     * @var float
     */
    private float $valor;

    /**
     * @var array
     */
    private array $efetivo;

    /**
     * @param OrigemEnum|null $origem
     * @return IIcmsBuilder
     */
    public function setOrigem(?OrigemEnum $origem): IIcmsBuilder
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * @param CstIcmsEnum|null $cst
     * @return IIcmsBuilder
     */
    public function setCst(?CstIcmsEnum $cst): IIcmsBuilder
    {
        $this->cst = $cst;

        return $this;
    }

    /**
     * @param float|null $percentual
     * @param float|null $valor
     * @return IIcmsBuilder
     */
    public function setCreditoSimplesNacional(?float $percentual, ?float $valor): IIcmsBuilder
    {
        $percentualConvertido = $percentual / 100;

        $this->creditoSimplesNacional = [
            'percentual' => $percentualConvertido,
            'valor' => $percentualConvertido * $valor
        ];

        return $this;
    }

    /**
     * @param SubstituicaoTributaria|null $substituicaoTributaria
     * @return IIcmsBuilder
     */
    public function setSubstituicaoTributaria(?SubstituicaoTributaria $substituicaoTributaria): IIcmsBuilder
    {
        $this->substituicaoTributaria = $substituicaoTributaria;

        return $this;
    }

    /**
     * @param float|null $valor
     * @return IIcmsBuilder
     */
    public function setValor(?float $valor): IIcmsBuilder
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * @param float|null $bc_percentual_reducao
     * @param float|null $bc_valor
     * @param float|null $aliquota
     * @return IIcmsBuilder
     */
    public function setEfetivo(?float $bc_percentual_reducao, ?float $bc_valor, ?float $aliquota): IIcmsBuilder
    {
        $this->efetivo = [
            'baseCalculo' => [
                'percentualReducao' => $bc_percentual_reducao,
                'valor' => $bc_valor,
            ],
            'aliquota' => $aliquota,
        ];

        return $this;
    }

    /**
     * @return Icms
     */
    public function build(): Icms
    {
        return new Icms(
            origem: $this->origem,
            cst: $this->cst,
            creditoSimplesNacional: $this->creditoSimplesNacional,
            substituicaoTributaria: $this->substituicaoTributaria,
            valor: $this->valor,
            efetivo: $this->efetivo
        );
    }
}
