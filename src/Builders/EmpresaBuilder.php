<?php

namespace TecnoSpeed\Plugnotas\Builders;

use Exception;
use TecnoSpeed\Plugnotas\Common\Empresa;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Nfse\ConfiguracoesNfse;
use Respect\Validation\Validator as v;
use TecnoSpeed\Plugnotas\Validators\ValidaEmpresa;

class EmpresaBuilder
{
    private ?ConfiguracoesNfse $configuracoesNfse = null;
    private ?Pessoa $pessoa = null;
    private Configuration $configuracao;

    /**
     * @throws Exception
     */
    public function setPessoa(?Pessoa $pessoa): EmpresaBuilder
    {
        ValidaEmpresa::validaDadosGerais($pessoa);
        $this->pessoa = $pessoa;
        return $this;
    }

    public function setConfiguracoesNfse(?ConfiguracoesNfse $configuracoesNfse): EmpresaBuilder
    {
        $configuracoesNfse->validate();
        $this->configuracoesNfse = $configuracoesNfse;
        return $this;
    }

    public function setConfiguracao(Configuration $configuracao): EmpresaBuilder
    {
        $this->configuracao = $configuracao;
        return $this;
    }

    public function build(): Empresa
    {
        return new Empresa($this->configuracao, $this->pessoa, $this->configuracoesNfse);
    }
}
