<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Cofins;
use TecnoSpeed\Plugnotas\Common\Icms;
use TecnoSpeed\Plugnotas\Common\Ipi;
use TecnoSpeed\Plugnotas\Common\Issqn;
use TecnoSpeed\Plugnotas\Common\Partilha;
use TecnoSpeed\Plugnotas\Common\Pis;
use TecnoSpeed\Plugnotas\Common\Tributos;
use TecnoSpeed\Plugnotas\Interfaces\ITributosBuilder;

class TributosBuilder implements ITributosBuilder
{
    /**
     * @var Partilha
     */
    private Partilha $partilha;
    /**
     * @var Icms
     */
    private Icms $icms;

    /**
     * @var Ipi
     */
    private Ipi $ipi;

    /**
     * @var Pis
     */
    private Pis $pis;

    /**
     * @var Cofins
     */
    private Cofins $cofins;

    /**
     * @var Issqn
     */
    private Issqn $issqn;

    /**
     * @var float
     */
    private float $valorAproximadoTributos;

    /**
     * @param float $baseCalculoIcms
     * @param float|null $percentualIcmsFcp
     * @param float $aliquotaInterna
     * @param float $aliquotaInterestadual
     * @return ITributosBuilder
     */
    public function setPartilha(float $baseCalculoIcms, ?float $percentualIcmsFcp, float $aliquotaInterna, float $aliquotaInterestadual): ITributosBuilder
    {
        $this->partilha = new Partilha(
            baseCalculoIcms: $baseCalculoIcms,
            percentualIcmsFcp: $percentualIcmsFcp,
            aliquotaInterna: $aliquotaInterna,
            aliquotaInterestadual: $aliquotaInterestadual
        );

        return $this;
    }

    /**
     * @param Icms $icms
     * @return ITributosBuilder
     */
    public function setIcms(Icms $icms): ITributosBuilder
    {
        $this->icms = $icms;

        return $this;
    }

    /**
     * @param Ipi $ipi
     * @return ITributosBuilder
     */
    public function setIpi(Ipi $ipi): ITributosBuilder
    {
        $this->ipi = $ipi;

        return $this;
    }

    /**
     * @param Pis $pis
     * @return ITributosBuilder
     */
    public function setPis(Pis $pis): ITributosBuilder
    {
        $this->pis = $pis;

        return $this;
    }

    /**
     * @param Cofins $cofins
     * @return ITributosBuilder
     */
    public function setCofins(Cofins $cofins): ITributosBuilder
    {
        $this->cofins = $cofins;

        return $this;
    }

    /**
     * @param Issqn $issqn
     * @return ITributosBuilder
     */
    public function setIssqn(Issqn $issqn): ITributosBuilder
    {
        $this->issqn = $issqn;

        return $this;
    }

    /**
     * @param float $valorAproximadoTributos
     * @return ITributosBuilder
     */
    public function setValorAproximadoTributos(float $valorAproximadoTributos): ITributosBuilder
    {
        $this->valorAproximadoTributos = $valorAproximadoTributos;

        return $this;
    }

    /**
     * @return Tributos
     */
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
