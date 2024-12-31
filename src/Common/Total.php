<?php

namespace TecnoSpeed\Plugnotas\Common;

readonly class Total
{
    /**
     * @param float|null $valorPisRetido
     * @param float|null $valorCofinsRetido
     * @param float|null $valorIrrfRetido
     * @param float|null $valorCsllRetido
     * @param float|null $valorPrevSocialRetido
     */
    public function __construct
    (
        private ?float $valorPisRetido,
        private ?float $valorCofinsRetido,
        private ?float $valorIrrfRetido,
        private ?float $valorCsllRetido,
        private ?float $valorPrevSocialRetido,
    )
    {
    }

    /**
     * @return float|null
     */
    public function getValorPisRetido(): ?float
    {
        return $this->valorPisRetido;
    }

    /**
     * @return float|null
     */
    public function getValorCofinsRetido(): ?float
    {
        return $this->valorCofinsRetido;
    }

    /**
     * @return float|null
     */
    public function getValorIrrfRetido(): ?float
    {
        return $this->valorIrrfRetido;
    }

    /**
     * @return float|null
     */
    public function getValorCsllRetido(): ?float
    {
        return $this->valorCsllRetido;
    }

    /**
     * @return float|null
     */
    public function getValorPrevSocialRetido(): ?float
    {
        return $this->valorPrevSocialRetido;
    }


}
