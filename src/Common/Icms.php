<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\CstIcmsEnum;
use TecnoSpeed\Plugnotas\Enums\OrigemEnum;

readonly class Icms
{
    /**
     * @param OrigemEnum $origem
     * @param CstIcmsEnum $cst
     * @param array|null $creditoSimplesNacional
     * @param SubstituicaoTributaria|null $substituicaoTributaria
     * @param float|null $valor
     * @param array|null $efetivo
     */
    public function __construct
    (
        private OrigemEnum              $origem,
        private CstIcmsEnum             $cst,
        private ?array                  $creditoSimplesNacional,
        private ?SubstituicaoTributaria $substituicaoTributaria,
        private ?float                  $valor,
        private ?array                  $efetivo
    )
    {
    }

    /**
     * @return OrigemEnum
     */
    public function getOrigem(): OrigemEnum
    {
        return $this->origem;
    }

    /**
     * @return CstIcmsEnum
     */
    public function getCst(): CstIcmsEnum
    {
        return $this->cst;
    }

    /**
     * @return array|null
     */
    public function getCreditoSimplesNacional(): ?array
    {
        return $this->creditoSimplesNacional;
    }

    /**
     * @return SubstituicaoTributaria|null
     */
    public function getSubstituicaoTributaria(): ?SubstituicaoTributaria
    {
        return $this->substituicaoTributaria;
    }

    /**
     * @return float|null
     */
    public function getValor(): ?float
    {
        return $this->valor;
    }

    /**
     * @return array|null
     */
    public function getEfetivo(): ?array
    {
        return $this->efetivo;
    }
}
