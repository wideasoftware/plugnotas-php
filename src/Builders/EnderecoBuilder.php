<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Enums\EstadoEnum;
use TecnoSpeed\Plugnotas\Enums\TipoLogradouroEnum;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Traits\Validation;

class EnderecoBuilder
{
    use Validation;
    private ?TipoLogradouroEnum $tipoLogradouro = TipoLogradouroEnum::RUA;
    private ?string $logradouro = null;
    private ?string $numero = null;
    private ?string $complemento = null;
    private ?string $tipoBairro = null;
    private ?string $bairro = null;
    private ?string $codigoPais = '55';
    private ?string $descricaoPais = null;
    private ?string $codigoCidade = null;
    private ?string $descricaoCidade = null;
    private ?EstadoEnum $estado = null;
    private ?string $cep = null;

    public function setBairro(?string $bairro): EnderecoBuilder
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setCep(?string $cep): EnderecoBuilder
    {
        if ($cep) {
            $cepNumbers = $this::removeSpecialCharacters($cep);

            if (strlen($cepNumbers) !== 8) {
                throw new ValidationError(
                    'CEP inválido, por favor verifique se foram informados 8 números.'
                );
            }

            $this->cep = $cepNumbers;
        }

        return $this;
    }

    public function setCodigoCidade(?string $codigoCidade): EnderecoBuilder
    {
        $this->codigoCidade = $codigoCidade;

        return $this;
    }

    public function setEstado(?string $estado): EnderecoBuilder
    {
        if ($estado) {
            $this->estado = EstadoEnum::from($estado);
        }

        return $this;
    }

    public function setLogradouro(?string $logradouro): EnderecoBuilder
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    public function setNumero(?string $numero): EnderecoBuilder
    {
        $this->numero = $numero;

        return $this;
    }

    public function setTipoLogradouro(?string $tipoLogradouro): EnderecoBuilder
    {
        if ($tipoLogradouro) {
            $this->tipoLogradouro = TipoLogradouroEnum::from($tipoLogradouro);
        }

        return $this;
    }

    public function setCodigoPais(?string $codigoPais): EnderecoBuilder
    {
        $this->codigoPais = $codigoPais;

        return $this;
    }

    public function setComplemento(?string $complemento): EnderecoBuilder
    {
        $this->complemento = $complemento;

        return $this;
    }

    public function setDescricaoCidade(?string $descricaoCidade): EnderecoBuilder
    {
        $this->descricaoCidade = $descricaoCidade;

        return $this;
    }

    public function setDescricaoPais(?string $descricaoPais): EnderecoBuilder
    {
        $this->descricaoPais = $descricaoPais;

        return $this;
    }

    public function setTipoBairro(?string $tipoBairro): EnderecoBuilder
    {
        $this->tipoBairro = $tipoBairro;

        return $this;
    }

    public function build(): EnderecoV2
    {
        return new EnderecoV2(
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
    }
}
