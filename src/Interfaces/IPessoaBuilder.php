<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Endereco;
use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Telefone;

interface IPessoaBuilder
{
    /**
     * Define o CPF ou CNPJ.
     *
     * @param string $cpfCnpj CPF ou CNPJ no formato válido.
     * @return IPessoaBuilder
     */
    public function setCpfCnpj(string $cpfCnpj): IPessoaBuilder;

    /**
     * @param string $nome
     * @return IPessoaBuilder
     */
    public function setNome(string $nome): IPessoaBuilder;

    /**
     * Define a razão social.
     *
     * @param string|null $razaoSocial Nome da empresa.
     * @return IPessoaBuilder
     */
    public function setRazaoSocial(?string $razaoSocial): IPessoaBuilder;

    /**
     * Define o endereço.
     *
     * @param EnderecoV2|null $endereco Objeto com os dados do endereço.
     * @return IPessoaBuilder
     */
    public function setEndereco(?EnderecoV2 $endereco): IPessoaBuilder;

    /**
     * Define o email.
     *
     * @param string|null $email Email da pessoa ou empresa.
     * @return IPessoaBuilder
     */
    public function setEmail(?string $email): IPessoaBuilder;

    /**
     * Define a inscrição estadual.
     *
     * @param string|null $inscricaoEstadual Número da inscrição estadual.
     * @return IPessoaBuilder
     */
    public function setInscricaoEstadual(?string $inscricaoEstadual): IPessoaBuilder;

    /**
     * Define a inscrição municipal.
     *
     * @param string|null $inscricaoMunicipal Número da inscrição municipal.
     * @return IPessoaBuilder
     */
    public function setInscricaoMunicipal(?string $inscricaoMunicipal): IPessoaBuilder;

    /**
     * Define a inscrição Suframa.
     *
     * @param string|null $inscricaoSuframa Número da inscrição Suframa.
     * @return IPessoaBuilder
     */
    public function setInscricaoSuframa(?string $inscricaoSuframa): IPessoaBuilder;

    /**
     * Define o nome fantasia.
     *
     * @param string|null $nomeFantasia Nome fantasia da empresa.
     * @return IPessoaBuilder
     */
    public function setNomeFantasia(?string $nomeFantasia): IPessoaBuilder;

    /**
     * @param bool|null $orgaoPublico
     * @return IPessoaBuilder
     */
    public function setOrgaoPublico(?bool $orgaoPublico): IPessoaBuilder;

    /**
     * Define o telefone.
     *
     * @param string|null $dd
     * @param string|null $numero
     * @return IPessoaBuilder
     */
    public function setTelefone(?string $dd, ?string $numero): IPessoaBuilder;

    /**
     * Define o indicador da inscrição estadual.
     *
     * @param int|null $indicadorInscricaoEstadual Indicador numérico.
     * @return IPessoaBuilder
     */
    public function setIndicadorInscricaoEstadual(?int $indicadorInscricaoEstadual): IPessoaBuilder;

    /**
     * Define o código estrangeiro.
     *
     * @param string|null $codigoEstrangeiro Código de pessoa estrangeira.
     * @return IPessoaBuilder
     */
    public function setCodigoEstrangeiro(?string $codigoEstrangeiro): IPessoaBuilder;

    /**
     * Define o identificador não NIF.
     *
     * @param string|null $naoNif Identificador não NIF.
     * @return IPessoaBuilder
     */
    public function setNaoNif(?string $naoNif): IPessoaBuilder;

    /**
     * Constrói e retorna a entidade final.
     *
     * @return mixed Entidade construída.
     */
    public function build(): Pessoa;
}
