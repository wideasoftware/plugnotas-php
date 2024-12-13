<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Total;

class TotalBuilder
{
    /**
     * @var float|null
     */
    private ?float $valorPisRetido;
    /**
     * @var float|null
     */
    private ?float $valorCofinsRetido;
    /**
     * @var float|null
     */
    private ?float $valorIrrfRetido;
    /**
     * @var float|null
     */
    private ?float $valorCsllRetido;
    /**
     * @var float|null
     */
    private ?float $valorPrevSocialRetido;

    /**
     * @param float|null $valorPisRetido
     * @return $this
     */
    public function setValorPisRetido(?float $valorPisRetido): static
    {
        $this->valorPisRetido = $valorPisRetido;
        return $this;
    }

    /**
     * @param float|null $valorCofinsRetido
     * @return $this
     */
    public function setValorCofinsRetido(?float $valorCofinsRetido): static
    {
        $this->valorCofinsRetido = $valorCofinsRetido;
        return $this;
    }

    /**
     * @param float|null $valorIrrfRetido
     * @return $this
     */
    public function setValorIrrfRetido(?float $valorIrrfRetido): static
    {
        $this->valorIrrfRetido = $valorIrrfRetido;
        return $this;
    }

    /**
     * @param float|null $valorCsllRetido
     * @return $this
     */
    public function setValorCsllRetido(?float $valorCsllRetido): static
    {
        $this->valorCsllRetido = $valorCsllRetido;
        return $this;
    }

    /**
     * @param float|null $valorPrevSocialRetido
     * @return $this
     */
    public function setValorPrevSocialRetido(?float $valorPrevSocialRetido): static
    {
        $this->valorPrevSocialRetido = $valorPrevSocialRetido;
        return $this;
    }

    /**
     * @return Total
     */
    public function build(): Total
    {
        return new Total
        (
            valorPisRetido: $this->valorPisRetido,
            valorCofinsRetido: $this->valorCofinsRetido,
            valorIrrfRetido: $this->valorIrrfRetido,
            valorCsllRetido: $this->valorCsllRetido,
            valorPrevSocialRetido: $this->valorPrevSocialRetido,
        );
    }
}
