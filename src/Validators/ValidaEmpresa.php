<?php

namespace TecnoSpeed\Plugnotas\Validators;

use Exception;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Traits\DataTransform;
use TecnoSpeed\Plugnotas\Traits\Validation;

class ValidaEmpresa
{
    use Validation, DataTransform;

    /**
     * @throws ValidationError
     * @throws Exception
     */
    public static function validaDadosGerais(Pessoa $pessoa): void
    {
        $data = $pessoa->toArray();
        $validacao = v::arrayVal()->allOf(
            v::key('cpfCnpj', v::cnpj()->notEmpty()),
            v::key('razaoSocial', v::stringType()->notEmpty()),
            v::key('simplesNacional', v::boolType()->notEmpty()),
            v::key('regimeTributario', v::stringType()->notEmpty()),
            v::key('regimeTributarioEspecial', v::stringType()->notEmpty()),
            v::key('email', v::stringType()->notEmpty()),
            v::keyNested('endereco.bairro', v::stringType()->notEmpty()),
            v::keyNested('endereco.cep', v::stringType()->notEmpty()),
            v::keyNested('endereco.codigoCidade', v::stringType()->notEmpty()),
            v::keyNested('endereco.estado', v::stringType()->notEmpty()),
            v::keyNested('endereco.logradouro', v::stringType()->notEmpty()),
            v::keyNested('endereco.tipoLogradouro', v::stringType()->notEmpty()),
        )->validate($data);

        if(!$validacao){
            throw new ValidationError('Os parâmetros mínimos para criar uma empresa não foram preenchidos.');
        }
    }
}
