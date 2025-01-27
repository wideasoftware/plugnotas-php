<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Enums\IndicadorInscricaoEstadualEnum;
use TecnoSpeed\Plugnotas\Enums\NaoNifEnum;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Traits\Validation;

class PessoaBuilder
{
    use Validation;

    private ?string $cpfCnpj = null;
    private ?string $razaoSocial = null;
    private ?EnderecoV2 $endereco = null;
    private ?string $email = null;
    private ?string $inscricaoEstadual = null;
    private ?string $inscricaoMunicipal = null;
    private ?string $inscricaoSuframa = null;
    private ?string $nomeFantasia = null;
    private ?bool $orgaoPublico = null;
    private ?IndicadorInscricaoEstadualEnum $indicadorInscricaoEstadual = null;
    private ?array $telefone = null;
    private ?string $codigoEstrangeiro = null;
    private ?NaoNifEnum $naoNif = null;
    private ?string $nome = null;
    private ?string $identificadorCadastro = null;

    /**
     * @throws ValidationError
     */
    public function setCpfCnpj(string $cpfCnpj): PessoaBuilder
    {
        if (!$this::isValidCpfCnpj($cpfCnpj)) {
            throw new ValidationError('CPF/CNPJ Invalido');
        }

        $this->cpfCnpj = $this::removeSpecialCharacters($cpfCnpj);

        return $this;
    }

    public function setNome(?string $nome): PessoaBuilder
    {
        $this->nome = $nome;

        return $this;
    }

    public function setRazaoSocial(?string $razaoSocial): PessoaBuilder
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    public function setEndereco(?EnderecoV2 $endereco): PessoaBuilder
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setEmail(?string $email): PessoaBuilder
    {
        if ($email) {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new ValidationError('Email Invalido');
            }

            $this->email = $email;
        }

        return $this;
    }

    public function setInscricaoEstadual(?string $inscricaoEstadual): PessoaBuilder
    {
        if ($inscricaoEstadual) {
            $this->inscricaoEstadual = $this::removeSpecialCharacters($inscricaoEstadual);
        }

        return $this;
    }

    public function setInscricaoMunicipal(?string $inscricaoMunicipal): PessoaBuilder
    {
        if ($inscricaoMunicipal) {
            $this->inscricaoMunicipal = $this::removeSpecialCharacters($inscricaoMunicipal);
        }

        return $this;
    }

    public function setInscricaoSuframa(?string $inscricaoSuframa): PessoaBuilder
    {
        if ($inscricaoSuframa) {
            $this->inscricaoSuframa = $this::removeSpecialCharacters($inscricaoSuframa);

        }

        return $this;
    }

    public function setNomeFantasia(?string $nomeFantasia): PessoaBuilder
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    public function setOrgaoPublico(?bool $orgaoPublico): PessoaBuilder
    {
        $this->orgaoPublico = $orgaoPublico;

        return $this;
    }

    public function setTelefone(?string $dd, ?string $numero): PessoaBuilder
    {
        $this->telefone = [
            'dd' => $dd,
            'numero' => $numero,
        ];

        return $this;
    }

    public function setIndicadorInscricaoEstadual(?int $indicadorInscricaoEstadual): PessoaBuilder
    {
        if ($indicadorInscricaoEstadual) {
            $this->indicadorInscricaoEstadual = IndicadorInscricaoEstadualEnum::from($indicadorInscricaoEstadual);
        }

        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setCodigoEstrangeiro(?string $codigoEstrangeiro): PessoaBuilder
    {
        if ($codigoEstrangeiro) {
            $valoresPermitidos = ['1', '2', '9'];

            if (!in_array($codigoEstrangeiro, $valoresPermitidos, true)) {
                throw new ValidationError("O código estrangeiro deve ser 1, 2 ou 9. Valor recebido: {$codigoEstrangeiro}");
            }

            $this->codigoEstrangeiro = $codigoEstrangeiro;
        }

        return $this;
    }

    public function setNaoNif(?string $naoNif): PessoaBuilder
    {
        if ($naoNif) {
            $this->naoNif = NaoNifEnum::from($naoNif);
        }

        return $this;
    }

    public function setIdentificadorCadastro(?string $identificadorCadastro): PessoaBuilder
    {
        $this->identificadorCadastro = $identificadorCadastro;
        return $this;
    }

    /**
     * @return Pessoa
     */
    public function build(): Pessoa
    {
        return new Pessoa(
            nome: $this->nome,
            cpfCnpj: $this->cpfCnpj,
            razaoSocial: $this->razaoSocial,
            endereco: $this->endereco,
            email: $this->email,
            inscricaoEstadual: $this->inscricaoEstadual,
            inscricaoMunicipal: $this->inscricaoMunicipal,
            inscricaoSuframa: $this->inscricaoSuframa,
            nomeFantasia: $this->nomeFantasia,
            telefone: $this->telefone,
            indicadorInscricaoEstadual: $this->indicadorInscricaoEstadual,
            codigoEstrangeiro: $this->codigoEstrangeiro,
            naoNif: $this->naoNif,
            identificadorCadastro: $this->identificadorCadastro,
        );
    }
}
