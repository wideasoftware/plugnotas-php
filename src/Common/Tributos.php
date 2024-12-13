<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Dto\CofinsDto;
use TecnoSpeed\Plugnotas\Dto\IpiDto;
use TecnoSpeed\Plugnotas\Dto\IssqnDto;
use TecnoSpeed\Plugnotas\Dto\PartilhaDto;
use TecnoSpeed\Plugnotas\Dto\PisDto;
use TecnoSpeed\Plugnotas\Dto\TributosDto;

readonly class Tributos
{
    public function __construct(private TributosDto $tributosDto)
    {
    }

    /**
     * @return PartilhaDto|null
     */

    public function getPartilha(): ?PartilhaDto
    {
        return $this->tributosDto->partilha;
    }

    /**
     * @return Icms|null
     */
    public function getIcms(): ?Icms
    {
        return $this->tributosDto->icms;
    }

    /**
     * @return IpiDto|null
     */
    public function getIpi(): ?IpiDto
    {
        return $this->tributosDto->ipi;
    }

    /**
     * @return PisDto|null
     */
    public function getPis(): ?PisDto
    {
        return $this->tributosDto->pis;
    }

    /**
     * @return CofinsDto|null
     */
    public function getCofins(): ?CofinsDto
    {
        return $this->tributosDto->cofins;
    }

    /**
     * @return IssqnDto|null
     */
    public function getIssqn(): ?IssqnDto
    {
        return $this->tributosDto->issqn;
    }

    /**
     * @return float|null
     */
    public function getValorAproximadoTributos(): ?float
    {
        return $this->tributosDto->valorAproximadoTributos;
    }
}
