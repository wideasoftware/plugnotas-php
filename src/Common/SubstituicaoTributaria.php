<?php

namespace TecnoSpeed\Plugnotas\Common;

readonly class SubstituicaoTributaria
{

    /**
     * @param array|null $baseCalculo
     * @param float|null $aliquota
     * @param float|null $valor
     * @param array|null $fundoCombatePobreza
     */
    public function __construct
    (
        private ?array $baseCalculo,
        private ?float $aliquota,
        private ?float $valor,
        private ?array $fundoCombatePobreza
    )
    {
    }

    /**
     * @return array|null
     */
    public function getBaseCalculo(): ?array
    {
        return $this->baseCalculo;
    }

    /**
     * @return float|null
     */
    public function getAliquota(): ?float
    {
        return $this->aliquota;
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
    public function getFundoCombateProbreza(): ?array
    {
        return $this->fundoCombatePobreza;
    }
}
