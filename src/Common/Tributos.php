<?php

namespace TecnoSpeed\Plugnotas\Common;

class Tributos
{
    /**
     * @var Partilha|null
     */
    private ?Partilha $partilha;

    /**
     * @var Icms|null
     */
    private ?Icms $icms;

    /**
     * @var Ipi|null
     */
    private ?Ipi $ipi;

    /**
     * @var Pis|null
     */
    private ?Pis $pis;

    /**
     * @var Cofins|null
     */
    private ?Cofins $cofins;

    /**
     * @var Issqn|null
     */
    private ?Issqn $issqn;

    /**
     * @var float|null
     */
    private ?float $valorAproximadoTributos;

    /**
     * @param Partilha|null $partilha
     * @param Icms|null $icms
     * @param Ipi|null $ipi
     * @param Pis|null $pis
     * @param Cofins|null $cofins
     * @param Issqn|null $issqn
     * @param float|null $valorAproximadoTributos
     */
    public function __construct
    (
        ?Partilha $partilha,
        ?Icms     $icms,
        ?Ipi      $ipi,
        ?Pis      $pis,
        ?Cofins   $cofins,
        ?Issqn    $issqn,
        ?float    $valorAproximadoTributos
    )
    {
        $this->partilha = $partilha;
        $this->icms = $icms;
        $this->ipi = $ipi;
        $this->pis = $pis;
        $this->cofins = $cofins;
        $this->issqn = $issqn;
        $this->valorAproximadoTributos = $valorAproximadoTributos;
    }


    /**
     * @return Partilha|null
     */

    public function getPartilha(): ?Partilha
    {
        return $this->partilha;
    }

    /**
     * @return Icms|null
     */
    public function getIcms(): ?Icms
    {
        return $this->icms;
    }

    /**
     * @return Ipi|null
     */
    public function getIpi(): ?Ipi
    {
        return $this->ipi;
    }

    /**
     * @return Pis|null
     */
    public function getPis(): ?Pis
    {
        return $this->pis;
    }

    /**
     * @return Cofins|null
     */
    public function getCofins(): ?Cofins
    {
        return $this->cofins;
    }

    /**
     * @return Issqn|null
     */
    public function getIssqn(): ?Issqn
    {
        return $this->issqn;
    }

    /**
     * @return float|null
     */
    public function getValorAproximadoTributos(): ?float
    {
        return $this->valorAproximadoTributos;
    }
}
