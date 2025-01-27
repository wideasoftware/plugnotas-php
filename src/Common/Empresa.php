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
        private Configuration     $configuration,
        public ?string            $cpfCnpj,
        public ?string            $razaoSocial,
        public ?string            $nomeFantasia,
        public ?EnderecoV2        $endereco,
        public ?string            $email,
        public ?string            $inscricaoEstadual,
        public ?string            $inscricaoMunicipal,
        public ?array             $telefone,
        public ?string            $certificado,
        public ?bool              $simplesNacional,
        public ?int               $regimeTributario,
        public ?int               $regimeTributarioEspecial,
        public ?bool              $incentivoFiscal,
        public ?bool              $incentivadorCultural,
        public ?ConfiguracoesNfse $nfse
    )
    {

    }

    public function getCpfCnpj(): ?string
    {
        return $this->cpfCnpj;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razaoSocial;
    }

    public function getEndereco(): ?EnderecoV2
    {
        return $this->endereco;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getInscricaoEstadual(): ?string
    {
        return $this->inscricaoEstadual;
    }

    public function getInscricaoMunicipal(): ?string
    {
        return $this->inscricaoMunicipal;
    }

    public function getNomeFantasia(): ?string
    {
        return $this->nomeFantasia;
    }

    public function getTelefone(): ?array
    {
        return $this->telefone;
    }

    public function getCertificado(): ?string
    {
        return $this->certificado;
    }

    public function getSimplesNacional(): ?bool
    {
        return $this->simplesNacional;
    }

    public function getRegimeTributario(): ?int
    {
        return $this->regimeTributario;
    }

    public function getRegimeTributarioEspecial(): ?int
    {
        return $this->regimeTributarioEspecial;
    }

    public function getIncentivoFiscal(): ?bool
    {
        return $this->incentivoFiscal;
    }

    public function getIncentivadorCultural(): ?bool
    {
        return $this->incentivadorCultural;
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
