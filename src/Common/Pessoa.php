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

    public function __construct(private readonly PessoaDTO $pessoaDTO)
    {
    }

    public function getCpfCnpj(): ?string
    {
        return $this->pessoaDTO->cpfCnpj;
    }


    public function getNome(): ?string
    {
        return $this->pessoaDTO->nome;
    }


    public function getRazaoSocial(): ?string
    {
        return $this->pessoaDTO->razaoSocial;
    }


    public function getEndereco(): ?EnderecoV2
    {
        return $this->pessoaDTO->endereco;
    }


    public function getEmail(): ?string
    {
        return $this->pessoaDTO->email;
    }


    public function getInscricaoEstadual(): ?string
    {
        return $this->pessoaDTO->inscricaoEstadual;
    }


    public function getInscricaoMunicipal(): ?string
    {
        return $this->pessoaDTO->inscricaoMunicipal;
    }


    public function getInscricaoSuframa(): ?string
    {
        return $this->pessoaDTO->inscricaoSuframa;
    }


    public function getNomeFantasia(): ?string
    {
        return $this->pessoaDTO->nomeFantasia;
    }


    public function getTelefone(): TelefoneDto
    {
        return $this->pessoaDTO->telefone;
    }


    public function getIndicadorInscricaoEstadual(): IndicadorInscricaoEstadualEnum
    {
        return $this->pessoaDTO->indicadorInscricaoEstadual;
    }


    public function getCodigoEstrangeiro(): ?string
    {
        return $this->pessoaDTO->codigoEstrangeiro;
    }

    public function getNaoNif(): NaoNifEnum
    {
        return $this->pessoaDTO->naoNif;
    }
}




