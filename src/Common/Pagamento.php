<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\FormasDePagamentoEnum;

readonly class Pagamento
{
    public function __construct
    (
        private ?bool                 $aVista = true,
        private FormasDePagamentoEnum $meio,
        private ?string               $descricaoMeio,
        private float                 $valor,
        private ?string               $data
    )
    {
    }

    /**
     * @return bool|null
     */
    public function getAVista(): ?bool
    {
        return $this->aVista;
    }

    /**
     * @return FormasDePagamentoEnum
     */
    public function getMeio(): FormasDePagamentoEnum
    {
        return $this->meio;
    }

    /**
     * @return string|null
     */
    public function getDescricaoMeio(): ?string
    {
        return $this->descricaoMeio;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
}
