<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Dto\PessoaDto;
use TecnoSpeed\Plugnotas\Dto\TelefoneDto;
use TecnoSpeed\Plugnotas\Enums\IndicadorInscricaoEstadualEnum;
use TecnoSpeed\Plugnotas\Enums\NaoNifEnum;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Interfaces\IPessoaBuilder;
use TecnoSpeed\Plugnotas\Traits\Validation;

use Respect\Validation\Validator as v;

class PessoaBuilder implements IPessoaBuilder
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
    private ?TelefoneDto $telefone = null;
    private ?string $codigoEstrangeiro = null;
    private ?NaoNifEnum $naoNif = null;
    private ?string $nome = null;
    private ?string $identificadorCadastro = null;
    private ?string $certificado = null;
    private ?bool $simplesNacional = null;
    private ?int $regimeTributario = null;
    private ?bool $incentivoFiscal = null;
    private ?bool $incentivadorCultural = null;
    private ?int $regimeTributarioEspecial = null;

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
     * @param string $razaoSocial
     * @return IPessoaBuilder
     */
    public function setRazaoSocial(string $razaoSocial): IPessoaBuilder
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * @param EnderecoV2 $endereco
     * @return IPessoaBuilder
     */
    public function setEndereco(EnderecoV2 $endereco): IPessoaBuilder
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
     * @param string $inscricaoSuframa
     * @return IPessoaBuilder
     */
    public function setInscricaoSuframa(string $inscricaoSuframa): IPessoaBuilder
    {
        $this->inscricaoSuframa = $inscricaoSuframa;

        return $this;
    }

    /**
     * @param string $nomeFantasia
     * @return IPessoaBuilder
     */
    public function setNomeFantasia(string $nomeFantasia): IPessoaBuilder
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * @param bool $orgaoPublico
     * @return IPessoaBuilder
     */
    public function setOrgaoPublico(bool $orgaoPublico): IPessoaBuilder
    {
        $this->orgaoPublico = $orgaoPublico;

        return $this;
    }

    /**
     * @param string|null $dd
     * @param string $numero
     * @return $this
     */
    public function setTelefone(?string $dd, string $numero): IPessoaBuilder
    {
        if($numero){
            $this->telefone = new TelefoneDto($numero, $dd);
        }

        return $this;
    }

    /**
     * @param int $indicadorInscricaoEstadual
     * @return IPessoaBuilder
     */
    public function setIndicadorInscricaoEstadual(int $indicadorInscricaoEstadual): IPessoaBuilder
    {
        $this->indicadorInscricaoEstadual = IndicadorInscricaoEstadualEnum::from($indicadorInscricaoEstadual);

        return $this;
    }

    /**
     * @param string $codigoEstrangeiro
     * @return IPessoaBuilder
     * @throws ValidationError
     */
    public function setCodigoEstrangeiro(string $codigoEstrangeiro): IPessoaBuilder
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
     * @return IPessoaBuilder
     */
    public function setNaoNif(string $naoNif): IPessoaBuilder
    {
        $this->naoNif = NaoNifEnum::from($naoNif);

        return $this;
    }

    /**
     * @param string $identificadorCadastro
     * @return IPessoaBuilder
     */
    public function setIdentificadorCadastro(string $identificadorCadastro): IPessoaBuilder
    {
        $this->identificadorCadastro = $identificadorCadastro;
        return $this;
    }

    /**
     * @param string $certificado
     * @return IPessoaBuilder
     */
    public function setCertificado(string $certificado): IPessoaBuilder
    {
        $this->certificado = $certificado;
        return $this;
    }

    /**
     * @param bool $simplesNacional
     * @return IPessoaBuilder
     */
    public function setSimplesNacional(bool $simplesNacional): IPessoaBuilder
    {
        $this->simplesNacional = $simplesNacional;
        return $this;
    }

    /**
     * @param int $regimeTributario
     * @return IPessoaBuilder
     */
    public function setRegimeTributario(int $regimeTributario): IPessoaBuilder
    {
        $this->regimeTributario = $regimeTributario;
        return $this;
    }

    /**
     * @param bool|null $incentivoFiscal
     * @return IPessoaBuilder
     */
    public function setIncentivoFiscal(?bool $incentivoFiscal): IPessoaBuilder
    {
        $this->incentivoFiscal = $incentivoFiscal;
        return $this;
    }

    /**
     * @param bool|null $incentivadorCultural
     * @return IPessoaBuilder
     */
    public function setIncentivadorCultural(?bool $incentivadorCultural): IPessoaBuilder
    {
        $this->incentivadorCultural = $incentivadorCultural;
        return $this;
    }

    /**
     * @param int $regimeTributarioEspecial
     * @return IPessoaBuilder
     */
    public function setRegimeTributarioEspecial(int $regimeTributarioEspecial): IPessoaBuilder
    {
        $this->regimeTributarioEspecial = $regimeTributarioEspecial;
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
            identificadorCadastro: $this->identificadorCadastro,
            certificado: $this->certificado,
            simplesNacional: $this->simplesNacional,
            regimeTributario: $this->regimeTributario,
            incentivoFiscal: $this->incentivoFiscal,
            incentivadorCultural: $this->incentivadorCultural,
            regimeTributarioEspecial: $this->regimeTributarioEspecial
        );

        return new Pessoa($pessoaDto);
    }
}
