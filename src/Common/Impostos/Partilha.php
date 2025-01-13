<?php

namespace TecnoSpeed\Plugnotas\Common\Impostos;

readonly class Partilha
{
    public function __construct
    (
        private ?float $baseCalculoIcms,
        private ?float $percentualIcmsFcp,
        private ?float $aliquotaInterna,
        private ?float $aliquotaInterestadual
    )
    {
    }

    public function getBaseCalculoIcms(): ?float
    {
        return $this->baseCalculoIcms;
    }

    public function getPercentualIcmsFcp(): ?float
    {
        return $this->percentualIcmsFcp;
    }

    public function getAliquotaInterna(): ?float
    {
        return $this->aliquotaInterna;
    }

    public function getAliquotaInterestadual(): ?float
    {
        return $this->aliquotaInterestadual;
    }


}
