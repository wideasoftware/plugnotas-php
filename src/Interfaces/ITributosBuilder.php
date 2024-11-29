<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Cofins;
use TecnoSpeed\Plugnotas\Common\Icms;
use TecnoSpeed\Plugnotas\Common\Ipi;
use TecnoSpeed\Plugnotas\Common\Issqn;
use TecnoSpeed\Plugnotas\Common\Partilha;
use TecnoSpeed\Plugnotas\Common\Pis;
use TecnoSpeed\Plugnotas\Common\Tributos;

interface ITributosBuilder
{
    /**
     * @param float $baseCalculoIcms
     * @param float|null $percentualIcmsFcp
     * @param float $aliquotaInterna
     * @param float $aliquotaInterestadual
     * @return self
     */
    public function setPartilha(float $baseCalculoIcms, ?float $percentualIcmsFcp, float $aliquotaInterna, float $aliquotaInterestadual): self;

    /**
     * @param Icms $icms
     * @return self
     */
    public function setIcms(Icms $icms): self;

    /**
     * @param Ipi $ipi
     * @return self
     */
    public function setIpi(Ipi $ipi): self;

    /**
     * @param Pis $pis
     * @return self
     */
    public function setPis(Pis $pis): self;

    /**
     * @param Cofins $cofins
     * @return self
     */
    public function setCofins(Cofins $cofins): self;

    /**
     * @param Issqn $issqn
     * @return self
     */
    public function setIssqn(Issqn $issqn): self;

    /**
     * @param float $valorAproximadoTributos
     * @return self
     */
    public function setValorAproximadoTributos(float $valorAproximadoTributos): self;

    public function build(): Tributos;
}
