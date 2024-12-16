<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Icms;
use TecnoSpeed\Plugnotas\Common\SubstituicaoTributaria;
use TecnoSpeed\Plugnotas\Enums\CstIcmsEnum;
use TecnoSpeed\Plugnotas\Enums\OrigemEnum;

class IcmsBuilder
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
     * @return IcmsBuilder
     */
    public function setOrigem(?OrigemEnum $origem): IcmsBuilder
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * @param CstIcmsEnum|null $cst
     * @return IcmsBuilder
     */
    public function setCst(?CstIcmsEnum $cst): IcmsBuilder
    {
        $this->cst = $cst;

        return $this;
    }

    /**
     * @param float|null $percentual
     * @param float|null $valor
     * @return IcmsBuilder
     */
    public function setCreditoSimplesNacional(?float $percentual, ?float $valor): IcmsBuilder
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
     * @return IcmsBuilder
     */
    public function setSubstituicaoTributaria(?SubstituicaoTributaria $substituicaoTributaria): IcmsBuilder
    {
        $this->substituicaoTributaria = $substituicaoTributaria;

        return $this;
    }

    /**
     * @param float|null $valor
     * @return IcmsBuilder
     */
    public function setValor(?float $valor): IcmsBuilder
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * @param float|null $bc_percentual_reducao
     * @param float|null $bc_valor
     * @param float|null $aliquota
     * @return IcmsBuilder
     */
    public function setEfetivo(?float $bc_percentual_reducao, ?float $bc_valor, ?float $aliquota): IcmsBuilder
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
