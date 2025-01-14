<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Impostos\Cofins;
use TecnoSpeed\Plugnotas\Common\Impostos\Icms;
use TecnoSpeed\Plugnotas\Common\Impostos\Ipi;
use TecnoSpeed\Plugnotas\Common\Impostos\Issqn;
use TecnoSpeed\Plugnotas\Common\Impostos\Partilha;
use TecnoSpeed\Plugnotas\Common\Impostos\Pis;
use TecnoSpeed\Plugnotas\Common\Tributos;

class TributosBuilder
{
    private ?Partilha $partilha = null;
    private ?Icms $icms = null;
    private ?Ipi $ipi = null;
    private ?Pis $pis = null;
    private ?Cofins $cofins = null;
    private ?Issqn $issqn = null;
    private ?float $valorAproximadoTributos = null;

    public function setPartilha(?Partilha $partilha): TributosBuilder
    {
        $this->partilha = $partilha;

        return $this;
    }

    public function setIcms(?Icms $icms): TributosBuilder
    {
        $this->icms = $icms;

        return $this;
    }

    public function setIpi(?Ipi $ipi): TributosBuilder
    {
        $this->ipi = $ipi;

        return $this;
    }

    public function setPis(?Pis $pis): TributosBuilder
    {
        $this->pis = $pis;

        return $this;
    }

    public function setCofins(?Cofins $cofins): TributosBuilder
    {
        $this->cofins = $cofins;

        return $this;
    }

    public function setIssqn(?Issqn $issqn): TributosBuilder
    {
        $this->issqn = $issqn;

        return $this;
    }

    public function setValorAproximadoTributos(?float $valorAproximadoTributos): TributosBuilder
    {
        $this->valorAproximadoTributos = $valorAproximadoTributos;

        return $this;
    }


    public function build(): Tributos
    {
        return new Tributos(
            partilha: $this->partilha,
            icms: $this->icms,
            ipi: $this->ipi,
            pis: $this->pis,
            cofins: $this->cofins,
            issqn: $this->issqn,
            valorAproximadoTributos: $this->valorAproximadoTributos,
        );

    }


}
