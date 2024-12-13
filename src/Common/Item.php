<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Dto\ComercialETributavelDto;
use TecnoSpeed\Plugnotas\Dto\ItemDto;

readonly class Item
{
    /**
     * @param ItemDto $itemDto
     */
    public function __construct(private ItemDto $itemDto)
    {
    }

    /**
     * @return string|null
     */
    public function getCodigo(): ?string
    {
        return $this->itemDto->codigo;
    }

    /**
     * @return string|null
     */
    public function getCodigoBarras(): ?string
    {
        return $this->itemDto->codigoBarras;
    }

    /**
     * @return string|null
     */
    public function getCodigoBarrasTributavel(): ?string
    {
        return $this->itemDto->codigoBarrasTributavel;
    }

    /**
     * @return string|null
     */
    public function getDescricao(): ?string
    {
        return $this->itemDto->descricao;
    }

    /**
     * @return string|null
     */
    public function getNcm(): ?string
    {
        return $this->itemDto->ncm;
    }

    /**
     * @return string|null
     */
    public function getCest(): ?string
    {
        return $this->itemDto->cest;
    }

    /**
     * @return string|null
     */
    public function getCfop(): ?string
    {
        return $this->itemDto->cfop;
    }

    /**
     * @return float|null
     */
    public function getValor(): ?float
    {
        return $this->itemDto->valor;
    }

    /**
     * @return Tributos|null
     */
    public function getTributos(): ?Tributos
    {
        return $this->itemDto->tributos;
    }

    /**
     * @return bool|null
     */
    public function isCompoeTotal(): ?bool
    {
        return $this->itemDto->compoeTotal;
    }

    /**
     * @return string|null
     */
    public function getCodigoBeneficioFiscal(): ?string
    {
        return $this->itemDto->codigoBeneficioFiscal;
    }

    /**
     * @return float|null
     */
    public function getValorFrete(): ?float
    {
        return $this->itemDto->valorFrete;
    }

    /**
     * @return float|null
     */
    public function getValorSeguro(): ?float
    {
        return $this->itemDto->valorSeguro;
    }

    /**
     * @return float|null
     */
    public function getValorDesconto(): ?float
    {
        return $this->itemDto->valorDesconto;
    }

    /**
     * @return float|null
     */
    public function getValorOutros(): ?float
    {
        return $this->itemDto->valorOutros;
    }

    /**
     * @return ComercialETributavelDto|null
     */
    public function getUnidade(): ?ComercialETributavelDto
    {
        return $this->itemDto->unidade;
    }

    /**
     * @return ComercialETributavelDto|null
     */
    public function getQuantidade(): ?ComercialETributavelDto
    {
        return $this->itemDto->quantidade;
    }

    /**
     * @return ComercialETributavelDto|null
     */
    public function getValorUnitario(): ?ComercialETributavelDto
    {
        return $this->itemDto->valorUnitario;
    }
}
