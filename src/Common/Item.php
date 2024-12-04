<?php

namespace TecnoSpeed\Plugnotas\Common;

class Item
{
    /**
     * @var string|null
     */
    private ?string $codigo;

    /**
     * @var string|null
     */
    private ?string $codigoBarras;

    /**
     * @var string|null
     */
    private ?string $codigoBarrasTributavel;

    /**
     * @var string
     */
    private string $descricao;

    /**
     * @var string
     */
    private string $ncm;

    /**
     * @var string|null
     */
    private ?string $cest;

    /**
     * @var string
     */
    private string $cfop;

    /**
     * @var float|null
     */
    private ?float $valor;

    /**
     * @var Tributos
     */
    private Tributos $tributos;

    /**
     * @var bool|null
     */
    private ?bool $compoeTotal;

    /**
     * @var string|null
     */
    private ?string $codigoBeneficioFiscal;

    /**
     * @var float|null
     */
    private ?float $valorFrete;

    /**
     * @var float|null
     */
    private ?float $valorSeguro;

    /**
     * @var float|null
     */
    private ?float $valorDesconto;

    /**
     * @var float|null
     */
    private ?float $valorOutros;

    /**
     * @var array|null
     */
    private ?array $unidade;

    /**
     * @var array|null
     */
    private ?array $quantidade;

    /**
     * @var array
     */
    private array $valorUnitario;

    /**
     * @param string|null $codigo
     * @param string|null $codigoBarras
     * @param string|null $codigoBarrasTributavel
     * @param string $descricao
     * @param string $ncm
     * @param string|null $cest
     * @param string $cfop
     * @param float|null $valor
     * @param Tributos $tributos
     * @param bool|null $compoeTotal
     * @param string|null $codigoBeneficioFiscal
     * @param float|null $valorFrete
     * @param float|null $valorSeguro
     * @param float|null $valorDesconto
     * @param float|null $valorOutros
     * @param array|null $unidade
     * @param array|null $quantidade
     * @param array $valorUnitario
     */
    public function __construct
    (
        ?string  $codigo,
        ?string  $codigoBarras,
        ?string  $codigoBarrasTributavel,
        string   $descricao,
        string   $ncm,
        ?string  $cest,
        string   $cfop,
        ?float   $valor,
        Tributos $tributos,
        ?bool    $compoeTotal,
        ?string  $codigoBeneficioFiscal,
        ?float   $valorFrete,
        ?float   $valorSeguro,
        ?float   $valorDesconto,
        ?float   $valorOutros,
        ?array   $unidade,
        ?array   $quantidade,
        array    $valorUnitario,
    )
    {
        $this->codigo = $codigo;
        $this->codigoBarras = $codigoBarras;
        $this->codigoBarrasTributavel = $codigoBarrasTributavel;
        $this->descricao = $descricao;
        $this->ncm = $ncm;
        $this->cest = $cest;
        $this->cfop = $cfop;
        $this->valor = $valor;
        $this->tributos = $tributos;
        $this->compoeTotal = $compoeTotal;
        $this->codigoBeneficioFiscal = $codigoBeneficioFiscal;
        $this->valorFrete = $valorFrete;
        $this->valorSeguro = $valorSeguro;
        $this->valorDesconto = $valorDesconto;
        $this->valorOutros = $valorOutros;
        $this->unidade = $unidade;
        $this->quantidade = $quantidade;
        $this->valorUnitario = $valorUnitario;
    }

    /**
     * @return string
     */
    public function getCodigo(): string
    {
        return $this->codigo;
    }

    /**
     * @return string
     */
    public function getCodigoBarras(): string
    {
        return $this->codigoBarras;
    }

    /**
     * @return string
     */
    public function getCodigoBarrasTributavel(): string
    {
        return $this->codigoBarrasTributavel;
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * @return string
     */
    public function getNcm(): string
    {
        return $this->ncm;
    }

    /**
     * @return string
     */
    public function getCest(): string
    {
        return $this->cest;
    }

    /**
     * @return string
     */
    public function getCfop(): string
    {
        return $this->cfop;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @return Tributos
     */
    public function getTributos(): Tributos
    {
        return $this->tributos;
    }

    /**
     * @return bool
     */
    public function isCompoeTotal(): bool
    {
        return $this->compoeTotal;
    }

    /**
     * @return string
     */
    public function getCodigoBeneficioFiscal(): string
    {
        return $this->codigoBeneficioFiscal;
    }

    /**
     * @return float
     */
    public function getValorFrete(): float
    {
        return $this->valorFrete;
    }

    /**
     * @return float
     */
    public function getValorSeguro(): float
    {
        return $this->valorSeguro;
    }

    /**
     * @return float
     */
    public function getValorDesconto(): float
    {
        return $this->valorDesconto;
    }

    /**
     * @return float
     */
    public function getValorOutros(): float
    {
        return $this->valorOutros;
    }

    /**
     * @return array
     */
    public function getUnidade(): array
    {
        return $this->unidade;
    }

    /**
     * @return array
     */
    public function getQuantidade(): array
    {
        return $this->quantidade;
    }

    /**
     * @return array
     */
    public function getValorUnitario(): array
    {
        return $this->valorUnitario;
    }
}
