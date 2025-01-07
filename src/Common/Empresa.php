<?php

namespace TecnoSpeed\Plugnotas\Common;

use Exception;
use TecnoSpeed\Plugnotas\Communication\Response;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Error\ConfigurationRequiredError;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Nfse\ConfiguracoesNfse;
use TecnoSpeed\Plugnotas\Traits\Communication;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

readonly class Empresa
{
    use Communication, DataTransform;

    public function __construct(
        private Configuration $configuration,
        public ?Pessoa $pessoa,
        public ?ConfiguracoesNfse $nfse
    )
    {

    }

    public function getPessoa(): Pessoa
    {
        return $this->pessoa;
    }

    public function getConfiguracoesNfse(): ConfiguracoesNfse
    {
        return $this->nfse;
    }


    /**
     * @throws ConfigurationRequiredError
     * @throws Exception
     */
    public function create(): Response
    {
        $this->getCallApiInstance($this->configuration);
        $communication = $this->getCallApiInstance($this->configuration);

        return $communication->send('POST', '/empresa', [
            ...$this->getPessoa()->toArray(),
            $this->getConfiguracoesNfse()->toArray(),
        ]);
    }

    /**
     * @throws ConfigurationRequiredError
     * @throws Exception
     */
    public function update(): Response
    {
        $this->getCallApiInstance($this->configuration);
        $communication = $this->getCallApiInstance($this->configuration);

        $cnpj = $this->getPessoa()->getCpfCnpj();
        if(strlen($cnpj) != 14){
            throw new ValidationError('CNPJ inválido.');
        }

        return $communication->send('PATCH', "/empresa/{$this->getPessoa()->getCpfCnpj()}", [
            ...$this->getPessoa()->toArray(),
            $this->getConfiguracoesNfse()->toArray(),
        ]);
    }
}
