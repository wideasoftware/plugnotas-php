<?php

namespace TecnoSpeed\Plugnotas;

use Exception;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Total;
use TecnoSpeed\Plugnotas\Common\Transporte;
use TecnoSpeed\Plugnotas\Communication\Response;
use TecnoSpeed\Plugnotas\Dto\NfeDto;
use TecnoSpeed\Plugnotas\Dto\NotaReferenciadaDto;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\IntermediadorEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;
use TecnoSpeed\Plugnotas\Error\ConfigurationRequiredError;
use TecnoSpeed\Plugnotas\Traits\Communication;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

class Nfe
{
    use Communication, DataTransform;

    public function __construct
    (
        private readonly NfeDto        $nfeDto,
        private readonly Configuration $config
    )
    {
    }

    public function getIdIntegracao(): string
    {
        return $this->nfeDto->idIntegracao;
    }

    public function getFinalidade(): FinalidadeNfeEnum
    {
        return $this->nfeDto->finalidade;
    }

    public function getNatureza(): string
    {
        return $this->nfeDto->natureza;
    }

    public function getDataEmissao(): string
    {
        return $this->nfeDto->dataEmissao;
    }

    public function getPresencial(): ?PresencialEnum
    {
        return $this->nfeDto->presencial;
    }

    public function getConsumidorFinal(): ?bool
    {
        return $this->nfeDto->consumidorFinal;
    }

    public function getNotaReferenciada(): ?NotaReferenciadaDto
    {
        return $this->nfeDto->notaReferenciada;
    }

    public function getEmitente(): Pessoa
    {
        return $this->nfeDto->emitente;
    }

    public function getDestinatario(): Pessoa
    {
        return $this->nfeDto->destinatario;
    }

    public function getItens(): array
    {
        return $this->nfeDto->itens;
    }

    public function getTotal(): Total
    {
        return $this->nfeDto->total;
    }

    public function getTransporte(): ?Transporte
    {
        return $this->nfeDto->transporte;
    }

    public function getPagamentos(): array
    {
        return $this->nfeDto->pagamentos;
    }

    public function getInformacoesComplementares(): ?string
    {
        return $this->nfeDto->informacoesComplementares;
    }

    public function getIntermediadorTransacao(): ?Pessoa
    {
        return $this->nfeDto->intermediadorTransacao;
    }

    public function getIntermediador(): IntermediadorEnum
    {
        return $this->nfeDto->intermediador;
    }

    /**
     * @throws ConfigurationRequiredError
     * @throws Exception
     */
    public function send(): Response
    {
        return $this->getCallApiInstance($this->config)->send('POST', '/nfe', [$this->toArray()]);
    }
}
