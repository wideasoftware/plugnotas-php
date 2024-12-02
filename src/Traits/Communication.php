<?php

namespace TecnoSpeed\Plugnotas\Traits;

use TecnoSpeed\Plugnotas\Communication\CallApi;
use TecnoSpeed\Plugnotas\Error\ConfigurationRequiredError;

trait Communication
{
    /**
     * @throws ConfigurationRequiredError
     */
    protected function getCallApiInstance($configuration): CallApi
    {
        if (!$configuration) {
            throw new ConfigurationRequiredError('É necessário setar a configuração utilizando o método setConfiguration.');
        }

        return new CallApi($configuration);
    }
}

