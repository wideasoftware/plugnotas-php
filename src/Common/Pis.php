<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\CstPisEnum;

class Pis
{
    /**
     * @var CstPisEnum
     */
    private CstPisEnum $cst;
    /**
     * @var array
     */
    private array $baseCalculo;
    /**
     * @var float
     */
    private float $aliquota;

    /**
     * @param CstPisEnum $cst
     * @param array $baseCalculo
     * @param float $aliquota
     */
    public function __construct
    (
        CstPisEnum $cst,
        array $baseCalculo,
        float $aliquota
    )
    {
        $this->cst = $cst;
        $this->baseCalculo = $baseCalculo;
        $this->aliquota = $aliquota;
    }

    /**
     * @return CstPisEnum
     */
    public function getCst(): CstPisEnum
    {
        return $this->cst;
    }

    /**
     * @return array
     */
    public function getBaseCalculo(): array
    {
        return $this->baseCalculo;
    }

    /**
     * @return float
     */
    public function getAliquota(): float
    {
        return $this->aliquota;
    }


}
