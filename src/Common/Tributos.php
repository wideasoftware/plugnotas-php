<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Common\Impostos\Cofins;
use TecnoSpeed\Plugnotas\Common\Impostos\Icms;
use TecnoSpeed\Plugnotas\Common\Impostos\Ipi;
use TecnoSpeed\Plugnotas\Common\Impostos\Issqn;
use TecnoSpeed\Plugnotas\Common\Impostos\Partilha;
use TecnoSpeed\Plugnotas\Common\Impostos\Pis;

readonly class Tributos
{
    public function __construct
    (
        private ?Partilha $partilha,
        private ?Icms     $icms,
        private ?Ipi      $ipi,
        private ?Pis      $pis,
        private ?Cofins   $cofins,
        private ?Issqn    $issqn,
        private ?float    $valorAproximadoTributos
    )
    {
    }

    public function getPartilha(): ?Partilha
    {
        return $this->partilha;
    }

    public function getIcms(): ?Icms
    {
        return $this->icms;
    }

    public function getIpi(): ?Ipi
    {
        return $this->ipi;
    }

    public function getPis(): ?Pis
    {
        return $this->pis;
    }

    public function getCofins(): ?Cofins
    {
        return $this->cofins;
    }

    public function getIssqn(): ?Issqn
    {
        return $this->issqn;
    }

    public function getValorAproximadoTributos(): ?float
    {
        return $this->valorAproximadoTributos;
    }


}
