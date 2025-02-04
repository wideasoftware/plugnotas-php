<?php

namespace TecnoSpeed\Plugnotas\Builders\Empresa;

use TecnoSpeed\Plugnotas\Empresa\Empresa;
use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Empresa\Nfse;
use Respect\Validation\Validator as v;
use TecnoSpeed\Plugnotas\Traits\Validation;

class EmpresaBuilder
{
    use Validation;

    private Configuration $configuration;
    private string $cpfCnpj;
    private string $razaoSocial;
    private EnderecoV2 $endereco;
    private string $email;
    private string $inscricaoEstadual;
    private string $inscricaoMunicipal;
    private ?string $nomeFantasia = null;
    private ?array $telefone = null;
    private ?string $certificado = null;
    private bool $simplesNacional;
    private int $regimeTributario;
    private int $regimeTributarioEspecial;
    private ?Nfse $nfse = null;

    public function setConfiguration(Configuration $configuration): EmpresaBuilder
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setCpfCnpj(string $cpfCnpj): EmpresaBuilder
    {
        if (!$this::isValidCpfCnpj($cpfCnpj)) {
            throw new ValidationError('CPF/CNPJ Invalido');
        }

        $this->cpfCnpj = $this::removeSpecialCharacters($cpfCnpj);
        return $this;
    }

    public function setRazaoSocial(string $razaoSocial): EmpresaBuilder
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function setNomeFantasia(?string $nomeFantasia): EmpresaBuilder
    {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    public function setEndereco(EnderecoV2 $endereco): EmpresaBuilder
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setEmail(string $email): EmpresaBuilder
    {
        if ($email) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new ValidationError('Email Invalido');
            }

            $this->email = $email;
        }
        return $this;
    }

    public function setInscricaoEstadual(?string $inscricaoEstadual): EmpresaBuilder
    {
        if ($inscricaoEstadual) {
            $this->inscricaoEstadual = $this::removeSpecialCharacters($inscricaoEstadual);
        }
        return $this;
    }

    public function setInscricaoMunicipal(?string $inscricaoMunicipal): EmpresaBuilder
    {
        if ($inscricaoMunicipal) {
            $this->inscricaoMunicipal = $this::removeSpecialCharacters($inscricaoMunicipal);
        }
        return $this;
    }

    public function setTelefone(?string $dd, ?string $numero): EmpresaBuilder
    {
        $this->telefone = [
            'dd' => $dd,
            'numero' => $numero,
        ];

        return $this;
    }

    public function setCertificado(?string $certificado): EmpresaBuilder
    {
        $this->certificado = $certificado;
        return $this;
    }

    public function setSimplesNacional(bool $simplesNacional): EmpresaBuilder
    {
        $this->simplesNacional = $simplesNacional;
        return $this;
    }

    public function setRegimeTributario(int $regimeTributario): EmpresaBuilder
    {
        $this->regimeTributario = $regimeTributario;
        return $this;
    }

    public function setRegimeTributarioEspecial(int $regimeTributarioEspecial): EmpresaBuilder
    {
        $this->regimeTributarioEspecial = $regimeTributarioEspecial;
        return $this;
    }

    public function setConfiguracoesNfse(?Nfse $nfse): EmpresaBuilder
    {
        $this->nfse = $nfse;
        return $this;
    }

    public function build(): Empresa
    {
        return new Empresa(
            configuration: $this->configuration,
            cpfCnpj: $this->cpfCnpj,
            razaoSocial: $this->razaoSocial,
            nomeFantasia: $this->nomeFantasia,
            endereco: $this->endereco,
            email: $this->email,
            inscricaoEstadual: $this->inscricaoEstadual,
            inscricaoMunicipal: $this->inscricaoMunicipal,
            telefone: $this->telefone,
            certificado: $this->certificado,
            simplesNacional: $this->simplesNacional,
            regimeTributario: $this->regimeTributario,
            regimeTributarioEspecial: $this->regimeTributarioEspecial,
            nfse: $this->nfse,
        );
    }
}
