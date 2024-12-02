<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\CstIpiEnum;

class Ipi
{
    /**
     * @var string
     */
    private string $codigoEnquadramentoLegal;
    /**
     * @var CstIpiEnum
     */
    private CstIpiEnum $cst;
    /**
     * @var float
     */
    private float $baseCalculo;
    /**
     * @var float
     */
    private float $aliquota;

    /**
     * @param string $codigoEnquadramentoLegal
     * @param CstIpiEnum $cst
     * @param float $baseCalculo
     * @param float $aliquota
     */
    public function __construct
    (
        string $codigoEnquadramentoLegal,
        CstIpiEnum $cst,
        float $baseCalculo,
        float $aliquota
    )
    {
        $this->codigoEnquadramentoLegal = $codigoEnquadramentoLegal;
        $this->cst = $cst;
        $this->baseCalculo = $baseCalculo;
        $this->aliquota = $aliquota;
    }

    /**
     * @return string
     */
    public function getCodigoEnquadramentoLegal(): string
    {
        return $this->codigoEnquadramentoLegal;
    }

    /**
     * @return CstIpiEnum
     */
    public function getCst(): CstIpiEnum
    {
        return $this->cst;
    }

    /**
     * @return float
     */
    public function getBaseCalculo(): float
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
