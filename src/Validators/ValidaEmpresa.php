<?php

namespace TecnoSpeed\Plugnotas\Validators;

use Exception;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Traits\DataTransform;
use TecnoSpeed\Plugnotas\Traits\Validation;
use Respect\Validation\Validator as v;

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
            v::key('cpfCnpj', v::cnpj())
        )->validate($data);

        if(!$validacao){
            throw new ValidationError('Os parâmetros mínimos para criar uma empresa não foram preenchidos.');
        }
    }
}
