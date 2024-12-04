<?php

namespace TecnoSpeed\Plugnotas\Common;

class Pessoa
{
    /**
     * @var string|null
     */
    private ?string $cpfCnpj;
    /**
     * @var string|null
     */
    private ?string $razaoSocial;
    /**
     * @var EnderecoV2|null
     */
    private ?EnderecoV2 $endereco;
    /**
     * @var string|null
     */
    private ?string $email;
    /**
     * @var string|null
     */
    private ?string $inscricaoEstadual;
    /**
     * @var string|null
     */
    private ?string $inscricaoMunicipal;
    /**
     * @var string|null
     */
    private ?string $inscricaoSuframa;
    /**
     * @var string|null
     */
    private ?string $nomeFantasia;
    /**
     * @var Telefone|null
     */
    private ?Telefone $telefone;
    /**
     * @var int|null
     */
    private ?int $indicadorInscricaoEstadual;
    /**
     * @var string|null
     */
    private ?string $codigoEstrangeiro;
    /**
     * @var string|null
     */
    private ?string $naoNif;
    private ?string $nome;

    /**
     * @param string|null $cpfCnpj
     * @param string|null $nome
     * @param string|null $razaoSocial
     * @param EnderecoV2|null $endereco
     * @param string|null $email
     * @param string|null $inscricaoEstadual
     * @param string|null $inscricaoMunicipal
     * @param string|null $inscricaoSuframa
     * @param string|null $nomeFantasia
     * @param Telefone|null $telefone
     * @param int|null $indicadorInscricaoEstadual
     * @param string|null $codigoEstrangeiro
     * @param string|null $naoNif
     */
    public function __construct
    (
        ?string   $cpfCnpj,
        ?string   $nome,
        ?string   $razaoSocial,
        ?EnderecoV2 $endereco,
        ?string   $email,
        ?string   $inscricaoEstadual,
        ?string   $inscricaoMunicipal,
        ?string   $inscricaoSuframa,
        ?string   $nomeFantasia,
        ?Telefone $telefone,
        ?int      $indicadorInscricaoEstadual,
        ?string   $codigoEstrangeiro,
        ?string   $naoNif,
    )
    {
        $this->cpfCnpj = $cpfCnpj;
        $this->nome = $nome;
        $this->razaoSocial = $razaoSocial;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->inscricaoEstadual = $inscricaoEstadual;
        $this->inscricaoMunicipal = $inscricaoMunicipal;
        $this->inscricaoSuframa = $inscricaoSuframa;
        $this->nomeFantasia = $nomeFantasia;
        $this->telefone = $telefone;
        $this->indicadorInscricaoEstadual = $indicadorInscricaoEstadual;
        $this->codigoEstrangeiro = $codigoEstrangeiro;
        $this->naoNif = $naoNif;
    }

    /**
     * @return string|null
     */
    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    /**
     * @return string|null
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @return string|null
     */
    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    /**
     * @return Endereco|null
     */
    public function getEndereco(): ?EnderecoV2
    {
        return $this->endereco;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getInscricaoEstadual(): ?string
    {
        return $this->inscricaoEstadual;
    }

    /**
     * @return string|null
     */
    public function getInscricaoMunicipal(): ?string
    {
        return $this->inscricaoMunicipal;
    }

    /**
     * @return string|null
     */
    public function getInscricaoSuframa(): ?string
    {
        return $this->inscricaoSuframa;
    }

    /**
     * @return string|null
     */
    public function getNomeFantasia(): ?string
    {
        return $this->nomeFantasia;
    }

    /**
     * @return Telefone|null
     */
    public function getTelefone(): ?Telefone
    {
        return $this->telefone;
    }

    /**
     * @return int|null
     */
    public function getIndicadorInscricaoEstadual(): ?int
    {
        return $this->indicadorInscricaoEstadual;
    }

    /**
     * @return string|null
     */
    public function getCodigoEstrangeiro(): ?string
    {
        return $this->codigoEstrangeiro;
    }

    /**
     * @return string|null
     */
    public function getNaoNif(): ?string
    {
        return $this->naoNif;
    }
}




