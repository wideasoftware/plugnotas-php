<?php

namespace TecnoSpeed\Plugnotas\Common;
readonly class Item
{
    public function __construct(
        private ?string   $codigo,
        private ?string   $descricao,
        private ?string   $ncm,
        private ?string   $cest,
        private ?string   $cfop,
        private ?float    $valor,
        private ?Tributos $tributos,
        private ?float    $valorFrete,
        private ?float    $valorSeguro,
        private ?float    $valorDesconto,
        private ?float    $valorOutros,
        private ?array    $quantidade,
        private ?array    $valorUnitario,
    )
    {
    }
    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function getNcm(): ?string
    {
        return $this->ncm;
    }

    public function getCest(): ?string
    {
        return $this->cest;
    }

    public function getCfop(): ?string
    {
        return $this->cfop;
    }

    public function getValor(): ?float
    {
        return $this->valor;
    }

    public function getTributos(): ?Tributos
    {
        return $this->tributos;
    }

    public function getValorFrete(): ?float
    {
        return $this->valorFrete;
    }

    public function getValorSeguro(): ?float
    {
        return $this->valorSeguro;
    }

    public function getValorDesconto(): ?float
    {
        return $this->valorDesconto;
    }

    public function getValorOutros(): ?float
    {
        return $this->valorOutros;
    }

    public function getQuantidade(): ?array
    {
        return $this->quantidade;
    }

    public function getValorUnitario(): ?array
    {
        return $this->valorUnitario;
    }
}
