<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\CstEnum;
use TecnoSpeed\Plugnotas\Enums\OrigemEnum;

class Icms
{
    /**
     * @var string|null
     */
    private ?string $origem;

    /**
     * @var string|null
     */
    private ?string $cst;

    /**
     * @var array|null
     */
    private ?array $creditoSimplesNacional;

    /**
     * @var SubstituicaoTributaria|null
     */
    private ?SubstituicaoTributaria $substituicaoTributaria;

    /**
     * @var float|null
     */
    private ?float $valor;

    /**
     * @var array|null
     */
    private ?array $efetivo;

    /**
     * @param OrigemEnum|null $origem
     * @param CstEnum|null $cst
     * @param array|null $creditoSimplesNacional
     * @param SubstituicaoTributaria|null $substituicaoTributaria
     * @param float|null $valor
     * @param array|null $efetivo
     */
    public function __construct
    (
        ?OrigemEnum             $origem,
        ?CstEnum                 $cst,
        ?array                  $creditoSimplesNacional,
        ?SubstituicaoTributaria $substituicaoTributaria,
        ?float                  $valor,
        ?array                $efetivo
    )
    {
        $this->origem = $origem;
        $this->cst = $cst;
        $this->creditoSimplesNacional = $creditoSimplesNacional;
        $this->substituicaoTributaria = $substituicaoTributaria;
        $this->valor = $valor;
        $this->efetivo = $efetivo;
    }

    /**
     * @return string|null
     */
    public function getOrigem(): ?string
    {
        return $this->origem;
    }

    /**
     * @return string|null
     */
    public function getCst(): ?string
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
