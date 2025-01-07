<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Tributos;
use TecnoSpeed\Plugnotas\Dto\ComercialETributavelDto;
use TecnoSpeed\Plugnotas\Dto\ItemDto;

class ItemBuilder
{
    /**
     * @var string
     */
    private string $codigo;
    /**
     * @var string
     */
    private string $descricao;
    /**
     * @var string
     */
    private string $ncm;
    /**
     * @var string
     */
    private string $cest;
    /**
     * @var string
     */
    private string $cfop;
    /**
     * @var float
     */
    private float $valor;
    /**
     * @var Tributos
     */
    private Tributos $tributos;
    /**
     * @var float
     */
    private float $valorFrete;
    /**
     * @var float
     */
    private float $valorSeguro;
    /**
     * @var float
     */
    private float $valorDesconto;
    /**
     * @var float
     */
    private float $valorOutros;
    /**
     * @var ComercialETributavelDto
     */
    private ComercialETributavelDto $quantidade;
    /**
     * @var ComercialETributavelDto
     */
    private ComercialETributavelDto $valorUnitario;


    public function setCodigo(?string $codigo): ItemBuilder
    {
        $this->codigo = $codigo;
        return $this;
    }


    public function setDescricao(?string $descricao): ItemBuilder
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function setNcm(?string $ncm): ItemBuilder
    {
        $this->ncm = $ncm;
        return $this;
    }

    public function setCest(?string $cest): ItemBuilder
    {
        $this->cest = $cest;
        return $this;
    }

    public function setCfop(?string $cfop): ItemBuilder
    {
        $this->cfop = $cfop;
        return $this;
    }

    public function setValor(?float $valor): ItemBuilder
    {
        $this->valor = $valor;
        return $this;
    }

    public function setTributos(?Tributos $tributos): ItemBuilder
    {
        $this->tributos = $tributos;
        return $this;
    }

    public function setValorFrete(?float $valorFrete): ItemBuilder
    {
        $this->valorFrete = $valorFrete;
        return $this;
    }

    public function setValorSeguro(?float $valorSeguro): ItemBuilder
    {
        $this->valorSeguro = $valorSeguro;
        return $this;
    }

    public function setValorDesconto(?float $valorDesconto): ItemBuilder
    {
        $this->valorDesconto = $valorDesconto;
        return $this;
    }

    public function setValorOutros(?float $valorOutros): ItemBuilder
    {
        $this->valorOutros = $valorOutros;
        return $this;
    }

    public function setQuantidade(?float $comercial, ?float $tributavel): ItemBuilder
    {
        $this->quantidade = new ComercialETributavelDto($comercial, $tributavel);
        return $this;
    }

    public function setValorUnitario(?float $comercial, ?float $tributavel): ItemBuilder
    {
        $this->valorUnitario = new ComercialETributavelDto($comercial, $tributavel);

        return $this;
    }

    /**
     * @return Item
     */
    public function build(): Item
    {
        $itemDto = new ItemDto
        (
            codigo: $this->codigo,
            descricao: $this->descricao,
            ncm: $this->ncm,
            cest: $this->cest,
            cfop: $this->cfop,
            valor: $this->valor,
            tributos: $this->tributos,
            valorFrete: $this->valorFrete,
            valorSeguro: $this->valorSeguro,
            valorDesconto: $this->valorDesconto,
            valorOutros: $this->valorOutros,
            quantidade: $this->quantidade,
            valorUnitario: $this->valorUnitario,
        );

        return new Item($itemDto);
    }
}
