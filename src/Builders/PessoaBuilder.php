<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Telefone;
use TecnoSpeed\Plugnotas\Dto\PessoaDto;
use TecnoSpeed\Plugnotas\Dto\TelefoneDto;
use TecnoSpeed\Plugnotas\Enums\IndicadorInscricaoEstadualEnum;
use TecnoSpeed\Plugnotas\Enums\NaoNifEnum;
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
    private IndicadorInscricaoEstadualEnum $indicadorInscricaoEstadual;
    private TelefoneDto $telefone;
    private string $codigoEstrangeiro;
    private NaoNifEnum $naoNif;
    private string $nome;
    private string $identificadorCadastro;

    /**
     * @param string $cpfCnpj
     * @return $this
     * @throws ValidationError
     */
    public function setCpfCnpj(string $cpfCnpj): IPessoaBuilder
    {
        if (!$this::isValidCpfCnpj($cpfCnpj)) {
            throw new ValidationError('CPF/CNPJ Invalido');
        }

        $this->cpfCnpj = $this::removeSpecialCharacters($cpfCnpj);

        return $this;
    }

    /**
     * @param string $nome
     * @return $this
     */
    public function setNome(string $nome): IPessoaBuilder
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @param string|null $razaoSocial
     * @return IPessoaBuilder
     */
    public function setRazaoSocial(?string $razaoSocial): IPessoaBuilder
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * @param EnderecoV2|null $endereco
     * @return IPessoaBuilder
     */
    public function setEndereco(?EnderecoV2 $endereco): IPessoaBuilder
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * @param string|null $email
     * @return IPessoaBuilder
     * @throws ValidationError
     */
    public function setEmail(?string $email): IPessoaBuilder
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new ValidationError('Email Invalido');
        }

        $this->email = $email;

        return $this;
    }

    /**
     * @param string|null $inscricaoEstadual
     * @return IPessoaBuilder
     */
    public function setInscricaoEstadual(?string $inscricaoEstadual): IPessoaBuilder
    {
        $this->inscricaoEstadual = $inscricaoEstadual;

        return $this;
    }

    /**
     * @param string|null $inscricaoMunicipal
     * @return IPessoaBuilder
     */
    public function setInscricaoMunicipal(?string $inscricaoMunicipal): IPessoaBuilder
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;

        return $this;
    }

    /**
     * @param string|null $inscricaoSuframa
     * @return IPessoaBuilder
     */
    public function setInscricaoSuframa(?string $inscricaoSuframa): IPessoaBuilder
    {
        $this->inscricaoSuframa = $inscricaoSuframa;

        return $this;
    }

    /**
     * @param string|null $nomeFantasia
     * @return IPessoaBuilder
     */
    public function setNomeFantasia(?string $nomeFantasia): IPessoaBuilder
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * @param bool|null $orgaoPublico
     * @return IPessoaBuilder
     */
    public function setOrgaoPublico(?bool $orgaoPublico): IPessoaBuilder
    {
        $this->orgaoPublico = $orgaoPublico;

        return $this;
    }

    /**
     * @param string|null $dd
     * @param string|null $numero
     * @return $this
     */
    public function setTelefone(?string $dd, ?string $numero): IPessoaBuilder
    {
        $this->telefone = new TelefoneDto($numero, $dd);

        return $this;
    }

    /**
     * @param int|null $indicadorInscricaoEstadual
     * @return IPessoaBuilder
     */
    public function setIndicadorInscricaoEstadual(?int $indicadorInscricaoEstadual): IPessoaBuilder
    {
        $this->indicadorInscricaoEstadual = IndicadorInscricaoEstadualEnum::from($indicadorInscricaoEstadual);

        return $this;
    }

    /**
     * @param string|null $codigoEstrangeiro
     * @return IPessoaBuilder
     * @throws ValidationError
     */
    public function setCodigoEstrangeiro(?string $codigoEstrangeiro): IPessoaBuilder
    {
        $valoresPermitidos = ['1', '2', '9'];

        if (!in_array($codigoEstrangeiro, $valoresPermitidos, true)) {
            throw new ValidationError("O código estrangeiro deve ser 1, 2 ou 9. Valor recebido: {$codigoEstrangeiro}");
        }

        $this->codigoEstrangeiro = $codigoEstrangeiro;

        return $this;
    }

    /**
     * @param string|null $naoNif
     * @return IPessoaBuilder
     */
    public function setNaoNif(?string $naoNif): IPessoaBuilder
    {
        $this->naoNif = NaoNifEnum::from($naoNif);

        return $this;
    }

    /**
     * @param string|null $identificadorCadastro
     * @return IPessoaBuilder
     */
    public function setIdentificadorCadastro(?string $identificadorCadastro): IPessoaBuilder
    {
        $this->identificadorCadastro = $identificadorCadastro;
        return $this;
    }

    /**
     * @return Pessoa
     */
    public function build(): Pessoa
    {
        $pessoaDto = new PessoaDto(
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
            identificadorCadastro: $this->identificadorCadastro
        );

        return new Pessoa($pessoaDto);
    }
}
