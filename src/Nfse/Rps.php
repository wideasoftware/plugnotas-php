<?php

namespace TecnoSpeed\Plugnotas\Nfse;

use Exception;
use TecnoSpeed\Plugnotas\Abstracts\BuilderAbstract;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class Rps extends BuilderAbstract
{
    private $dataEmissao;
    private $competencia;
    private $dataVencimento;

    /**
     * @throws Exception
     */
    public function setDataEmissao(string $dataEmissao): void
    {
        $this->dataEmissao = (new \DateTime($dataEmissao))->format('Y-m-d H:i:s');
    }

    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * @throws Exception
     */
    public function setCompetencia(string $competencia): void
    {
        $this->competencia = (new \DateTime($competencia))->format('Y-m-d H:i:s');
    }

    public function getCompetencia()
    {
        return $this->competencia;
    }

    /**
     * @throws Exception
     */
    public function setDataVencimento(string $dataVencimento): void
    {
        $this->dataVencimento = (new \DateTime($dataVencimento))->format('Y-m-d H:i:s');
    }

    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }
}
