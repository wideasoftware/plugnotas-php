<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Dto\EnderecoDto;
use TecnoSpeed\Plugnotas\Enums\EstadoEnum;
use TecnoSpeed\Plugnotas\Enums\TipoLogradouroEnum;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Interfaces\IEnderecoBuilder;
use TecnoSpeed\Plugnotas\Traits\Validation;

class EnderecoBuilder implements IEnderecoBuilder
{
    use Validation;

    /**
     * @var TipoLogradouroEnum
     */
    private TipoLogradouroEnum $tipoLogradouro;
    /**
     * @var string
     */
    private string $logradouro;
    /**
     * @var string
     */
    private string $numero;
    /**
     * @var string
     */
    private string $complemento;
    /**
     * @var string
     */
    private string $tipoBairro;
    /**
     * @var string
     */
    private string $bairro;
    /**
     * @var string
     */
    private string $codigoPais;
    /**
     * @var string
     */
    private string $descricaoPais;
    /**
     * @var string
     */
    private string $codigoCidade;
    /**
     * @var string
     */
    private string $descricaoCidade;
    /**
     * @var EstadoEnum
     */
    private EstadoEnum $estado;
    /**
     * @var string
     */
    private string $cep;

    /**
     * @param string|null $bairro
     * @return IEnderecoBuilder
     */
    public function setBairro(?string $bairro): IEnderecoBuilder
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * @param string|null $cep
     * @return IEnderecoBuilder
     * @throws ValidationError
     */
    public function setCep(?string $cep): IEnderecoBuilder
    {
        $cepNumbers = $this::removeSpecialCharacters($cep);

        if (strlen($cepNumbers) !== 8) {
            throw new ValidationError(
                'CEP inválido, por favor verifique se foram informados 8 números.'
            );
        }

        $this->cep = $cepNumbers;

        return $this;
    }

    /**
     * @param string|null $codigoCidade
     * @return IEnderecoBuilder
     */
    public function setCodigoCidade(?string $codigoCidade): IEnderecoBuilder
    {
        $this->codigoCidade = $codigoCidade;

        return $this;
    }

    /**
     * @param string|null $estado
     * @return IEnderecoBuilder
     */
    public function setEstado(?string $estado): IEnderecoBuilder
    {
        $this->estado = EstadoEnum::from($estado);

        return $this;
    }

    /**
     * @param string|null $logradouro
     * @return IEnderecoBuilder
     */
    public function setLogradouro(?string $logradouro): IEnderecoBuilder
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * @param string|null $numero
     * @return IEnderecoBuilder
     */
    public function setNumero(?string $numero): IEnderecoBuilder
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @param string|null $tipoLogradouro
     * @return IEnderecoBuilder
     */
    public function setTipoLogradouro(?string $tipoLogradouro): IEnderecoBuilder
    {
        $this->tipoLogradouro = TipoLogradouroEnum::from($tipoLogradouro);

        return $this;
    }

    /**
     * @param string|null $codigoPais
     * @return IEnderecoBuilder
     */
    public function setCodigoPais(?string $codigoPais): IEnderecoBuilder
    {
        $this->codigoPais = $codigoPais;

        return $this;
    }

    /**
     * @param string|null $complemento
     * @return IEnderecoBuilder
     */
    public function setComplemento(?string $complemento): IEnderecoBuilder
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * @param string|null $descricaoCidade
     * @return IEnderecoBuilder
     */
    public function setDescricaoCidade(?string $descricaoCidade): IEnderecoBuilder
    {
        $this->descricaoCidade = $descricaoCidade;

        return $this;
    }

    /**
     * @param string|null $descricaoPais
     * @return IEnderecoBuilder
     */
    public function setDescricaoPais(?string $descricaoPais): IEnderecoBuilder
    {
        $this->descricaoPais = $descricaoPais;

        return $this;
    }

    /**
     * @param string|null $tipoBairro
     * @return IEnderecoBuilder
     */
    public function setTipoBairro(?string $tipoBairro): IEnderecoBuilder
    {
        $this->tipoBairro = $tipoBairro;

        return $this;
    }

    /**
     * @return EnderecoV2
     */
    public function build(): EnderecoV2
    {
        $enderecoDto = new EnderecoDto(
            tipoLogradouro: $this->tipoLogradouro,
            logradouro: $this->logradouro,
            numero: $this->numero,
            complemento: $this->complemento,
            tipoBairro: $this->tipoBairro,
            bairro: $this->bairro,
            codigoPais: $this->codigoPais,
            descricaoPais: $this->descricaoPais,
            codigoCidade: $this->codigoCidade,
            descricaoCidade: $this->descricaoCidade,
            estado: $this->estado,
            cep: $this->cep,
        );

        return new EnderecoV2($enderecoDto);
    }
}
