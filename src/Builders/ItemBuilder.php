<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Tributos;
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
     * @var array|float[]
     */
    private array $unidade;
    /**
     * @var array|float[]
     */
    private array $quantidade;
    /**
     * @var array|float[]
     */
    private array $valorUnitario;

    /**
     * @param string $codigo
     * @return IItemBuilder
     */
    public function setCodigo(string $codigo): IItemBuilder
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @param string $codigoBarras
     * @return IItemBuilder
     */
    public function setCodigoBarras(string $codigoBarras): IItemBuilder
    {
        $this->codigoBarras = $codigoBarras;
        return $this;
    }

    /**
     * @param string $codigoBarrasTributavel
     * @return IItemBuilder
     */
    public function setCodigoBarrasTributavel(string $codigoBarrasTributavel): IItemBuilder
    {
        $this->codigoBarrasTributavel = $codigoBarrasTributavel;
        return $this;
    }

    /**
     * @param string $descricao
     * @return IItemBuilder
     */
    public function setDescricao(string $descricao): IItemBuilder
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @param string $ncm
     * @return IItemBuilder
     */
    public function setNcm(string $ncm): IItemBuilder
    {
        $this->ncm = $ncm;
        return $this;
    }

    /**
     * @param string $cest
     * @return IItemBuilder
     */
    public function setCest(string $cest): IItemBuilder
    {
        $this->cest = $cest;
        return $this;
    }

    /**
     * @param string $cfop
     * @return IItemBuilder
     */
    public function setCfop(string $cfop): IItemBuilder
    {
        $this->cfop = $cfop;
        return $this;
    }

    /**
     * @param float $valor
     * @return IItemBuilder
     */
    public function setValor(float $valor): IItemBuilder
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @param Tributos $tributos
     * @return IItemBuilder
     */
    public function setTributos(Tributos $tributos): IItemBuilder
    {
        $this->tributos = $tributos;
        return $this;
    }

    /**
     * @param bool $compoeTotal
     * @return IItemBuilder
     */
    public function setCompoeTotal(bool $compoeTotal): IItemBuilder
    {
        $this->compoeTotal = $compoeTotal;
        return $this;
    }

    /**
     * @param string $codigoBeneficioFiscal
     * @return IItemBuilder
     */
    public function setCodigoBeneficioFiscal(string $codigoBeneficioFiscal): IItemBuilder
    {
        $this->codigoBeneficioFiscal = $codigoBeneficioFiscal;
        return $this;
    }

    /**
     * @param float $valorFrete
     * @return IItemBuilder
     */
    public function valorFrete(float $valorFrete): IItemBuilder
    {
        $this->valorFrete = $valorFrete;
        return $this;
    }

    /**
     * @param float $valorSeguro
     * @return IItemBuilder
     */
    public function valorSeguro(float $valorSeguro): IItemBuilder
    {
        $this->valorSeguro = $valorSeguro;
        return $this;
    }

    /**
     * @param float $valorDesconto
     * @return IItemBuilder
     */
    public function valorDesconto(float $valorDesconto): IItemBuilder
    {
        $this->valorDesconto = $valorDesconto;
        return $this;
    }

    /**
     * @param float $valorOutros
     * @return IItemBuilder
     */
    public function valorOutros(float $valorOutros): IItemBuilder
    {
        $this->valorOutros = $valorOutros;
        return $this;
    }

    /**
     * @param float $comercial
     * @param float $tributavel
     * @return IItemBuilder
     */
    public function setUnidade(float $comercial, float $tributavel): IItemBuilder
    {
        $this->unidade = [
            'comercial' => $comercial,
            'tributavel' => $tributavel
        ];

        return $this;
    }

    /**
     * @param float $comercial
     * @param float $tributavel
     * @return IItemBuilder
     */
    public function setQuantidade(float $comercial, float $tributavel): IItemBuilder
    {
        $this->quantidade = [
            'comercial' => $comercial,
            'tributavel' => $tributavel
        ];
        return $this;
    }

    /**
     * @param float $comercial
     * @param float $tributavel
     * @return IItemBuilder
     */
    public function setValorUnitario(float $comercial, float $tributavel): IItemBuilder
    {
        $this->valorUnitario = [
            'comercial' => $comercial,
            'tributavel' => $tributavel
        ];
        return $this;
    }

    /**
     * @return Item
     */
    public function build(): Item
    {
        return new Item
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
    }
}
