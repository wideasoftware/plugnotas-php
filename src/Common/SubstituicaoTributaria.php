<?php

namespace TecnoSpeed\Plugnotas\Common;

class SubstituicaoTributaria
{
    /**
     * @var array|null
     */
    private ?array $baseCalculo;
    /**
     * @var float|null
     */
    private ?float $aliquota;
    /**
     * @var float|null
     */
    private ?float $valor;
    /**
     * @var array|null
     */
    private ?array $fundoCombatePobreza;

    /**
     * @param array|null $baseCalculo
     * @param float|null $aliquota
     * @param float|null $valor
     * @param array|null $fundoCombatePobreza
     */
    public function __construct(?array $baseCalculo, ?float $aliquota, ?float $valor, ?array $fundoCombatePobreza)
    {
        $this->baseCalculo = $baseCalculo;
        $this->aliquota = $aliquota;
        $this->valor = $valor;
        $this->fundoCombatePobreza = $fundoCombatePobreza;
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
