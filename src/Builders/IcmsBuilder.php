<?php

namespace TecnoSpeed\Plugnotas\Builders;


use TecnoSpeed\Plugnotas\Common\Impostos\Icms;
use TecnoSpeed\Plugnotas\Common\Impostos\SubstituicaoTributaria;
use TecnoSpeed\Plugnotas\Enums\CstIcmsEnum;
use TecnoSpeed\Plugnotas\Enums\OrigemEnum;

class IcmsBuilder
{
    private OrigemEnum $origem;
    private CstIcmsEnum $cst;
    private ?array $creditoSimplesNacional = null;
    private ?SubstituicaoTributaria $substituicaoTributaria = null;
    private ?float $valor = null;
    private ?array $efetivo = null;

    /**
     * @param string $origem
     * @return IcmsBuilder
     */
    public function setOrigem(string $origem): IcmsBuilder
    {
        $this->origem = OrigemEnum::from($origem);

        return $this;
    }

    /**
     * @param string $cst
     * @return IcmsBuilder
     */
    public function setCst(string $cst): IcmsBuilder
    {
        $this->cst = CstIcmsEnum::from($cst);

        return $this;
    }

    /**
     * @param float $percentual
     * @param float $bc_valor
     * @return IcmsBuilder
     */
    public function setCreditoSimplesNacional(float $percentual, float $bc_valor): IcmsBuilder
    {
        $percentualConvertido = $percentual / 100;

        $this->creditoSimplesNacional = [
            'percentual' => $percentual,
            'valor' => $percentualConvertido * $bc_valor
        ];

        return $this;
    }

    /**
     * @param SubstituicaoTributaria $substituicaoTributaria
     * @return IcmsBuilder
     */
    public function setSubstituicaoTributaria(SubstituicaoTributaria $substituicaoTributaria): IcmsBuilder
    {
        $this->substituicaoTributaria = $substituicaoTributaria;

        return $this;
    }

    /**
     * @param float $valor
     * @return IcmsBuilder
     */
    public function setValor(float $valor): IcmsBuilder
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * @param float $bc_percentual_reducao
     * @param float $bc_valor
     * @param float $aliquota
     * @return IcmsBuilder
     */
    public function setEfetivo(float $bc_percentual_reducao, float $bc_valor, float $aliquota): IcmsBuilder
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

    public function build(): Icms
    {
        return new Icms(
            origem: $this->origem,
            cst: $this->cst,
            creditoSimplesNacional: $this->creditoSimplesNacional,
            substituicaoTributaria: $this->substituicaoTributaria,
            valor: $this->valor,
            efetivo: $this->efetivo,
        );
    }
}
