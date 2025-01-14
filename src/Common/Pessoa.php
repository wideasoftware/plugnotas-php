<?php

namespace TecnoSpeed\Plugnotas\Common;

use TecnoSpeed\Plugnotas\Dto\PessoaDto;
use TecnoSpeed\Plugnotas\Dto\TelefoneDto;
use TecnoSpeed\Plugnotas\Enums\IndicadorInscricaoEstadualEnum;
use TecnoSpeed\Plugnotas\Enums\NaoNifEnum;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

class Pessoa
{
    use DataTransform;

    /**
     * @param PessoaDto $pessoaDTO
     */
    public function __construct(private readonly PessoaDTO $pessoaDTO)
    {
    }

    /**
     * @return string
     */
    public function getCpfCnpj(): string
    {
        return $this->pessoaDTO->cpfCnpj;
    }


    /**
     * @return ?string
     */
    public function getNome(): ?string
    {
        return $this->pessoaDTO->nome;
    }


    /**
     * @return string|null
     */
    public function getRazaoSocial(): ?string
    {
        return $this->pessoaDTO->razaoSocial;
    }


    /**
     * @return EnderecoV2|null
     */
    public function getEndereco(): ?EnderecoV2
    {
        return $this->pessoaDTO->endereco;
    }


    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->pessoaDTO->email;
    }


    /**
     * @return string|null
     */
    public function getInscricaoEstadual(): ?string
    {
        return $this->pessoaDTO->inscricaoEstadual;
    }


    /**
     * @return string|null
     */
    public function getInscricaoMunicipal(): ?string
    {
        return $this->pessoaDTO->inscricaoMunicipal;
    }


    /**
     * @return string|null
     */
    public function getInscricaoSuframa(): ?string
    {
        return $this->pessoaDTO->inscricaoSuframa;
    }


    /**
     * @return string|null
     */
    public function getNomeFantasia(): ?string
    {
        return $this->pessoaDTO->nomeFantasia;
    }


    /**
     * @return TelefoneDto
     */
    public function getTelefone(): TelefoneDto
    {
        return $this->pessoaDTO->telefone;
    }


    /**
     * @return ?IndicadorInscricaoEstadualEnum
     */
    public function getIndicadorInscricaoEstadual(): ?IndicadorInscricaoEstadualEnum
    {
        return $this->pessoaDTO->indicadorInscricaoEstadual;
    }


    /**
     * @return string|null
     */
    public function getCodigoEstrangeiro(): ?string
    {
        return $this->pessoaDTO->codigoEstrangeiro;
    }

    /**
     * @return ?NaoNifEnum
     */
    public function getNaoNif(): ?NaoNifEnum
    {
        return $this->pessoaDTO->naoNif;
    }

    /**
     * @return string|null
     */
    public function getCertificado(): ?string
    {
        return $this->pessoaDTO->certificado;
    }

    /**
     * @return bool|null
     */
    public function getSimplesNacional(): ?bool
    {
        return $this->pessoaDTO->simplesNacional;
    }

    /**
     * @return int|null
     */
    public function getRegimeTributario(): ?int
    {
        return $this->pessoaDTO->regimeTributario;
    }

    /**
     * @return bool|null
     */
    public function getIncentivoFiscal(): ?bool
    {
        return $this->pessoaDTO->incentivoFiscal;
    }

    /**
     * @return bool|null
     */
    public function getIncentivadorCultural(): ?bool
    {
        return $this->pessoaDTO->incentivadorCultural;
    }

    /**
     * @return int|null
     */
    public function getRegimeTributarioEspecial(): ?int
    {
        return $this->pessoaDTO->regimeTributarioEspecial;
    }
}
