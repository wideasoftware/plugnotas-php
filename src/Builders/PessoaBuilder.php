<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Telefone;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Interfaces\IPessoaBuilder;
use TecnoSpeed\Plugnotas\Traits\Validation;

class PessoaBuilder implements IPessoaBuilder
{
    use Validation;

    private string $cpfCnpj;
    private string $razaoSocial;
    private EnderecoV2 $endereco;
    private string $email;
    private string $inscricaoEstadual;
    private string $inscricaoMunicipal;
    private string $inscricaoSuframa;
    private string $nomeFantasia;
    private bool $orgaoPublico;
    private int $indicadorInscricaoEstadual;
    private Telefone $telefone;
    private string $codigoEstrangeiro;
    private string $naoNif;
    private string $nome;

    /**
     * @param string $cpfCnpj
     * @return $this
     * @throws ValidationError
     */
    public function setCpfCnpj(string $cpfCnpj): self
    {
        if (!$this->isValidCpfCnpj($cpfCnpj)) {
            throw new ValidationError('CPF/CNPJ Invalido');
        }

        $this->cpfCnpj = $this->removeSpecialCharacters($cpfCnpj);

        return $this;
    }

    /**
     * @param string $nome
     * @return $this
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @param string $razaoSocial
     * @return self
     */
    public function setRazaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * @param EnderecoV2 $endereco
     * @return self
     */
    public function setEndereco(EnderecoV2 $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * @param string $email
     * @return self
     * @throws ValidationError
     */
    public function setEmail(string $email): self
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new ValidationError('Email Invalido');
        }

        $this->email = $email;

        return $this;
    }

    /**
     * @param string $inscricaoEstadual
     * @return self
     */
    public function setInscricaoEstadual(string $inscricaoEstadual): self
    {
        $this->inscricaoEstadual = $inscricaoEstadual;

        return $this;
    }

    /**
     * @param string $inscricaoMunicipal
     * @return self
     */
    public function setInscricaoMunicipal(string $inscricaoMunicipal): self
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;

        return $this;
    }

    /**
     * @param string $inscricaoSuframa
     * @return self
     */
    public function setInscricaoSuframa(string $inscricaoSuframa): self
    {
        $this->inscricaoSuframa = $inscricaoSuframa;

        return $this;
    }

    /**
     * @param string $nomeFantasia
     * @return self
     */
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * @param bool $orgaoPublico
     * @return self
     */
    public function setOrgaoPublico(bool $orgaoPublico): self
    {
        $this->orgaoPublico = $orgaoPublico;

        return $this;
    }

    /**
     * @param string $dd
     * @param string $numero
     * @return $this
     */
    public function setTelefone(string $dd, string $numero): self
    {
        $this->telefone = new Telefone($dd, $numero);

        return $this;
    }

    /**
     * @param int $indicadorInscricaoEstadual
     * @return self
     */
    public function setIndicadorInscricaoEstadual(int $indicadorInscricaoEstadual): self
    {
        $this->indicadorInscricaoEstadual = $indicadorInscricaoEstadual;

        return $this;
    }

    /**
     * @param string $codigoEstrangeiro
     * @return self
     * @throws ValidationError
     */
    public function setCodigoEstrangeiro(string $codigoEstrangeiro): self
    {
        $valoresPermitidos = ['1', '2', '9'];

        if (!in_array($codigoEstrangeiro, $valoresPermitidos, true)) {
            throw new ValidationError("O código estrangeiro deve ser 1, 2 ou 9. Valor recebido: {$codigoEstrangeiro}");
        }

        $this->codigoEstrangeiro = $codigoEstrangeiro;

        return $this;
    }

    /**
     * @param string $naoNif
     * @return self
     * @throws ValidationError
     */
    public function setNaoNif(string $naoNif): self
    {
        $valoresPermitidos = ['0', '1', '2'];

        if (!in_array($naoNif, $valoresPermitidos, true)) {
            throw new ValidationError("O código deve ser 0, 1 ou 2. Valor recebido: {$naoNif}");
        }

        $this->naoNif = $naoNif;

        return $this;
    }

    /**
     * @return Pessoa
     */
    public function build(): Pessoa
    {
        return new Pessoa(
            cpfCnpj: $this->cpfCnpj,
            nome: $this->nome,
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
        );
    }
}
