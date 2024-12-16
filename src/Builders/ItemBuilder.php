<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Tributos;
use TecnoSpeed\Plugnotas\Dto\ComercialETributavelDto;
use TecnoSpeed\Plugnotas\Dto\ItemDto;
use TecnoSpeed\Plugnotas\Interfaces\IItemBuilder;

class ItemBuilder implements IItemBuilder
{
    /**
     * @var string
     */
    private string $codigo;
    /**
     * @var string
     */
    private string $codigoBarras;
    /**
     * @var string
     */
    private string $codigoBarrasTributavel;
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
     * @var bool
     */
    private bool $compoeTotal;
    /**
     * @var string
     */
    private string $codigoBeneficioFiscal;
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
    private ComercialETributavelDto $unidade;
    /**
     * @var ComercialETributavelDto
     */
    private ComercialETributavelDto $quantidade;
    /**
     * @var ComercialETributavelDto
     */
    private ComercialETributavelDto $valorUnitario;

    /**
     * @param string|null $codigo
     * @return IItemBuilder
     */
    public function setCodigo(?string $codigo): IItemBuilder
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @param string|null $codigoBarras
     * @return IItemBuilder
     */
    public function setCodigoBarras(?string $codigoBarras): IItemBuilder
    {
        $this->codigoBarras = $codigoBarras;
        return $this;
    }

    /**
     * @param string|null $codigoBarrasTributavel
     * @return IItemBuilder
     */
    public function setCodigoBarrasTributavel(?string $codigoBarrasTributavel): IItemBuilder
    {
        $this->codigoBarrasTributavel = $codigoBarrasTributavel;
        return $this;
    }

    /**
     * @param string|null $descricao
     * @return IItemBuilder
     */
    public function setDescricao(?string $descricao): IItemBuilder
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @param string|null $ncm
     * @return IItemBuilder
     */
    public function setNcm(?string $ncm): IItemBuilder
    {
        $this->ncm = $ncm;
        return $this;
    }

    /**
     * @param string|null $cest
     * @return IItemBuilder
     */
    public function setCest(?string $cest): IItemBuilder
    {
        $this->cest = $cest;
        return $this;
    }

    /**
     * @param string|null $cfop
     * @return IItemBuilder
     */
    public function setCfop(?string $cfop): IItemBuilder
    {
        $this->cfop = $cfop;
        return $this;
    }

    /**
     * @param float|null $valor
     * @return IItemBuilder
     */
    public function setValor(?float $valor): IItemBuilder
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @param Tributos|null $tributos
     * @return IItemBuilder
     */
    public function setTributos(?Tributos $tributos): IItemBuilder
    {
        $this->tributos = $tributos;
        return $this;
    }

    /**
     * @param bool $compoeTotal
     * @return IItemBuilder
     */
    public function setCompoeTotal(?bool $compoeTotal): IItemBuilder
    {
        $this->compoeTotal = $compoeTotal;
        return $this;
    }

    /**
     * @param string|null $codigoBeneficioFiscal
     * @return IItemBuilder
     */
    public function setCodigoBeneficioFiscal(?string $codigoBeneficioFiscal): IItemBuilder
    {
        $this->codigoBeneficioFiscal = $codigoBeneficioFiscal;
        return $this;
    }

    /**
     * @param float|null $valorFrete
     * @return IItemBuilder
     */
    public function setValorFrete(?float $valorFrete): IItemBuilder
    {
        $this->valorFrete = $valorFrete;
        return $this;
    }

    /**
     * @param float|null $valorSeguro
     * @return IItemBuilder
     */
    public function setValorSeguro(?float $valorSeguro): IItemBuilder
    {
        $this->valorSeguro = $valorSeguro;
        return $this;
    }

    /**
     * @param float|null $valorDesconto
     * @return IItemBuilder
     */
    public function setValorDesconto(?float $valorDesconto): IItemBuilder
    {
        $this->valorDesconto = $valorDesconto;
        return $this;
    }

    /**
     * @param float|null $valorOutros
     * @return IItemBuilder
     */
    public function setValorOutros(?float $valorOutros): IItemBuilder
    {
        $this->valorOutros = $valorOutros;
        return $this;
    }

    /**
     * @param float|null $comercial
     * @param float|null $tributavel
     * @return IItemBuilder
     */
    public function setUnidade(?float $comercial, ?float $tributavel): IItemBuilder
    {
        $this->unidade = new ComercialETributavelDto($comercial, $tributavel);

        return $this;
    }

    /**
     * @param float|null $comercial
     * @param float|null $tributavel
     * @return IItemBuilder
     */
    public function setQuantidade(?float $comercial, ?float $tributavel): IItemBuilder
    {
        $this->quantidade = new ComercialETributavelDto($comercial, $tributavel);
        return $this;
    }

    /**
     * @param float|null $comercial
     * @param float|null $tributavel
     * @return IItemBuilder
     */
    public function setValorUnitario(?float $comercial, ?float $tributavel): IItemBuilder
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
            codigoBarras: $this->codigoBarras,
            codigoBarrasTributavel: $this->codigoBarrasTributavel,
            descricao: $this->descricao,
            ncm: $this->ncm,
            cest: $this->cest,
            cfop: $this->cfop,
            valor: $this->valor,
            tributos: $this->tributos,
            compoeTotal: $this->compoeTotal,
            codigoBeneficioFiscal: $this->codigoBeneficioFiscal,
            valorFrete: $this->valorFrete,
            valorSeguro: $this->valorSeguro,
            valorDesconto: $this->valorDesconto,
            valorOutros: $this->valorOutros,
            unidade: $this->unidade,
            quantidade: $this->quantidade,
            valorUnitario: $this->valorUnitario,
        );

        return new Item($itemDto);
    }
}
