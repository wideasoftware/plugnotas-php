<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Endereco;
use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Enums\EstadoEnum;
use TecnoSpeed\Plugnotas\Enums\TipoLogradouroEnum;

interface IEnderecoBuilder
{
    /**
     * @param string $bairro
     * @return self
     */
    public function setBairro(string $bairro): self;

    /**
     * @param string $cep
     * @return self
     */
    public function setCep(string $cep): self;

    /**
     * @param string $codigoCidade
     * @return self
     */
    public function setCodigoCidade(string $codigoCidade): self;

    /**
     * @param EstadoEnum $estado
     * @return self
     */
    public function setEstado(EstadoEnum $estado): self;

    /**
     * @param string $logradouro
     * @return self
     */
    public function setLogradouro(string $logradouro): self;

    /**
     * @param string $numero
     * @return self
     */
    public function setNumero(string $numero): self;

    /**
     * @param TipoLogradouroEnum $tipoLogradouro
     * @return self
     */
    public function setTipoLogradouro(TipoLogradouroEnum $tipoLogradouro): self;

    /**
     * @param string $codigoPais
     * @return self
     */
    public function setCodigoPais(string $codigoPais): self;

    /**
     * @param string $complemento
     * @return self
     */
    public function setComplemento(string $complemento): self;

    /**
     * @param string $descricaoCidade
     * @return self
     */
    public function setDescricaoCidade(string $descricaoCidade): self;

    /**
     * @param string $descricaoPais
     * @return self
     */
    public function setDescricaoPais(string $descricaoPais): self;

    /**
     * @param string $tipoBairro
     * @return self
     */
    public function setTipoBairro(string $tipoBairro): self;

    /**
     * @return EnderecoV2
     */
    public function build(): EnderecoV2;
}
