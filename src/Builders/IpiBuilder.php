<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Impostos\Ipi;
use TecnoSpeed\Plugnotas\Enums\CstIpiEnum;

class IpiBuilder
{
    private string $codigoEnquadramentoLegal;
    private CstIpiEnum $cst;
    private ?float $baseCalculo = null;
    private ?float $aliquota = null;

    public function setCodigoEnquadramentoLegal(string $codigoEnquadramentoLegal): IpiBuilder
    {
        $this->codigoEnquadramentoLegal = $codigoEnquadramentoLegal;
        return $this;
    }

    public function setCst(string $cst): IpiBuilder
    {
        $this->cst = CstIpiEnum::from($cst);
        return $this;
    }

    public function setBaseCalculo(?float $baseCalculo): IpiBuilder
    {
        $this->baseCalculo = $baseCalculo;
        return $this;
    }

    public function setAliquota(?float $aliquota): IpiBuilder
    {
        $this->aliquota = $aliquota;
        return $this;
    }

    public function build(): Ipi
    {
        return new Ipi
        (
            codigoEnquadramentoLegal: $this->codigoEnquadramentoLegal,
            cst: $this->cst,
            baseCalculo: $this->baseCalculo,
            aliquota: $this->aliquota,
        );
    }


}
