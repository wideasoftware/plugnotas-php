<?php

namespace TecnoSpeed\Plugnotas\Common\Impostos;

use TecnoSpeed\Plugnotas\Enums\CstIcmsEnum;
use TecnoSpeed\Plugnotas\Enums\OrigemEnum;

readonly class Icms
{
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

    public function getOrigem(): OrigemEnum
    {
        return $this->origem;
    }

    public function getCst(): CstIcmsEnum
    {
        return $this->cst;
    }

    public function getCreditoSimplesNacional(): ?array
    {
        return $this->creditoSimplesNacional;
    }

    public function getSubstituicaoTributaria(): ?SubstituicaoTributaria
    {
        return $this->substituicaoTributaria;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function getEfetivo(): ?array
    {
        return $this->efetivo;
    }
}
