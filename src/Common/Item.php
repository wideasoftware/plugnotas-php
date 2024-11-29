<?php

namespace TecnoSpeed\Plugnotas\Common;

class Item
{
    private string $codigo;

    private string $codigoBarras;

    private string $codigoBarrasTributavel;

    private string $descricao;

    private string $ncm;

    private string $cest;

    private string $cfop;

    private float $valor;

    private $tributos;

    private bool $compoeTotal;

    private string $codigoBeneficioFiscal;

    private float $valorFrete;

    private float $valorSeguro;

    private float $valorDesconto;

    private float $valorOutros;

    private array $unidade;

    private array $quantidade;

    private float $valorUnitario;

}
