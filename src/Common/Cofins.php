<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\CstCofinsEnum;

class Cofins
{
    /**
     * @var CstCofinsEnum
     */
    private CstCofinsEnum $cst;
    /**
     * @var array
     */
    private array $baseCalculo;
    /**
     * @var float
     */
    private float $aliquota;

    /**
     * @param CstCofinsEnum $cst
     * @param array $baseCalculo
     * @param float $aliquota
     */
    public function __construct(CstCofinsEnum $cst, array $baseCalculo, float $aliquota)
    {
       $this->cst = $cst;
       $this->baseCalculo = $baseCalculo;
       $this->aliquota = $aliquota;
    }

    /**
     * @return CstCofinsEnum
     */
    public function getCst(): CstCofinsEnum
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
