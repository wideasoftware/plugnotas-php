<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Enums\IndicadorInscricaoEstadualEnum;
use TecnoSpeed\Plugnotas\Enums\NaoNifEnum;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

class Pessoa
{
    use DataTransform;

    public function __construct
    (
        public ?string                         $nome,
        public ?string                         $cpfCnpj,
        public ?string                         $razaoSocial,
        public ?EnderecoV2                     $endereco,
        public ?string                         $email,
        public ?string                         $inscricaoEstadual,
        public ?string                         $inscricaoMunicipal,
        public ?string                         $inscricaoSuframa,
        public ?string                         $nomeFantasia,
        public ?array                          $telefone,
        public ?IndicadorInscricaoEstadualEnum $indicadorInscricaoEstadual,
        public ?string                         $codigoEstrangeiro,
        public ?NaoNifEnum                     $naoNif,
        public ?string                         $identificadorCadastro,
        public ?string                         $certificado,
        public ?bool                           $simplesNacional,
        public ?int                            $regimeTributario,
        public ?bool                           $incentivoFiscal,
        public ?bool                           $incentivadorCultural,
        public ?int                            $regimeTributarioEspecial
    )
    {
    }

    /**
     * @return ?string
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function getEndereco(): ?EnderecoV2
    {
        return $this->endereco;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getInscricaoEstadual(): ?string
    {
        return $this->inscricaoEstadual;
    }

    public function getInscricaoMunicipal(): ?string
    {
        return $this->inscricaoMunicipal;
    }

    public function getInscricaoSuframa(): ?string
    {
        return $this->inscricaoSuframa;
    }

    public function getNomeFantasia(): ?string
    {
        return $this->nomeFantasia;
    }

    public function getTelefone(): ?array
    {
        return $this->telefone;
    }

    /**
     * @return ?IndicadorInscricaoEstadualEnum
     */
    public function getIndicadorInscricaoEstadual(): ?IndicadorInscricaoEstadualEnum
    {
        return $this->indicadorInscricaoEstadual;
    }

    public function getCodigoEstrangeiro(): ?string
    {
        return $this->codigoEstrangeiro;
    }

    /**
     * @return ?NaoNifEnum
     */
    public function getNaoNif(): ?NaoNifEnum
    {
        return $this->naoNif;
    }

    public function getIdentificadorCadastro(): ?string
    {
        return $this->identificadorCadastro;
    }

    public function getCertificado(): ?string
    {
        return $this->certificado;
    }

    public function getSimplesNacional(): ?bool
    {
        return $this->simplesNacional;
    }

    public function getRegimeTributario(): ?int
    {
        return $this->regimeTributario;
    }

    public function getIncentivoFiscal(): ?bool
    {
        return $this->incentivoFiscal;
    }

    public function getIncentivadorCultural(): ?bool
    {
        return $this->incentivadorCultural;
    }

    public function getRegimeTributarioEspecial(): ?int
    {
        return $this->regimeTributarioEspecial;
    }


}
