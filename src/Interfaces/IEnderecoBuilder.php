<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Endereco;
use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Enums\EstadoEnum;
use TecnoSpeed\Plugnotas\Enums\TipoLogradouroEnum;

interface IEnderecoBuilder
{
    /**
     * @param string|null $bairro
     * @return self
     */
    public function setBairro(?string $bairro): self;

    /**
     * @param string|null $cep
     * @return self
     */
    public function setCep(?string $cep): self;

    /**
     * @param string|null $codigoCidade
     * @return self
     */
    public function setCodigoCidade(?string $codigoCidade): self;

    /**
     * @param string|null $estado
     * @return self
     */
    public function setEstado(?string $estado): self;

    /**
     * @param string|null $logradouro
     * @return self
     */
    public function setLogradouro(?string $logradouro): self;

    /**
     * @param string|null $numero
     * @return self
     */
    public function setNumero(?string $numero): self;

    /**
     * @param string|null $tipoLogradouro
     * @return self
     */
    public function setTipoLogradouro(?string $tipoLogradouro): self;

    /**
     * @param string|null $codigoPais
     * @return self
     */
    public function setCodigoPais(?string $codigoPais): self;

    /**
     * @param string|null $complemento
     * @return self
     */
    public function setComplemento(?string $complemento): self;

    /**
     * @param string|null $descricaoCidade
     * @return self
     */
    public function setDescricaoCidade(?string $descricaoCidade): self;

    /**
     * @param string|null $descricaoPais
     * @return self
     */
    public function setDescricaoPais(?string $descricaoPais): self;

    /**
     * @param string|null $tipoBairro
     * @return self
     */
    public function setTipoBairro(?string $tipoBairro): self;

    /**
     * @return EnderecoV2
     */
    public function build(): EnderecoV2;
}
