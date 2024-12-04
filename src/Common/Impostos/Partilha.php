<?php

namespace TecnoSpeed\Plugnotas\Common\Impostos;

class Partilha
{
    private ?float $baseCalculoIcms;

    private ?float $percentualIcmsFcp;

    private ?float $aliquotaInterna;

    private ?float $aliquotaInterestadual;

    public function __construct
    (
        ?float $baseCalculoIcms,
        ?float $percentualIcmsFcp,
        ?float $aliquotaInterna,
        ?float $aliquotaInterestadual,

    )
    {
        $this->baseCalculoIcms = $baseCalculoIcms;
        $this->percentualIcmsFcp = $percentualIcmsFcp;
        $this->aliquotaInterna = $aliquotaInterna;
        $this->aliquotaInterestadual = $aliquotaInterestadual;
    }

    /**
     * @return float|null
     */
    public function getBaseCalculoIcms(): ?float
    {
        return $this->baseCalculoIcms;
    }

    /**
     * @return float|null
     */
    public function getPercentualIcmsFcp(): ?float
    {
        return $this->percentualIcmsFcp;
    }

    /**
     * @return float|null
     */
    public function getAliquotaInterna(): ?float
    {
        return $this->aliquotaInterna;
    }

    /**
     * @return float|null
     */
    public function getAliquotaInterestadual(): ?float
    {
        return $this->aliquotaInterestadual;
    }
}
