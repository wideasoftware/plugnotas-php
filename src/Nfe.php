<?php

namespace TecnoSpeed\Plugnotas;

use Exception;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Total;
use TecnoSpeed\Plugnotas\Common\Transporte;
use TecnoSpeed\Plugnotas\Communication\Response;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\IntermediadorEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;
use TecnoSpeed\Plugnotas\Error\ConfigurationRequiredError;
use TecnoSpeed\Plugnotas\Traits\Communication;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

readonly class Nfe
{
    use Communication, DataTransform;

    public function __construct
    (
        private string             $idIntegracao,
        private FinalidadeNfeEnum  $finalidade,
        private string             $natureza,
        private string             $dataEmissao,
        private PresencialEnum     $presencial,
        private bool               $consumidorFinal,
        private Pessoa             $emitente,
        private Pessoa             $destinatario,
        private array              $itens,
        private ?Total             $total,
        private ?Transporte        $transporte,
        private array              $pagamentos,
        private ?string            $informacoesComplementares,
        private ?Pessoa            $intermediadorTransacao,
        private ?IntermediadorEnum $intermediador,
        private Configuration      $config
    )
    {
    }
    public function getIdIntegracao(): string
    {
        return $this->idIntegracao;
    }

    public function getFinalidade(): FinalidadeNfeEnum
    {
        return $this->finalidade;
    }

    public function getNatureza(): string
    {
        return $this->natureza;
    }

    public function getDataEmissao(): string
    {
        return $this->dataEmissao;
    }

    public function getPresencial(): ?PresencialEnum
    {
        return $this->presencial;
    }

    public function getConsumidorFinal(): ?bool
    {
        return $this->consumidorFinal;
    }

    public function getEmitente(): Pessoa
    {
        return $this->emitente;
    }

    public function getDestinatario(): Pessoa
    {
        return $this->destinatario;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function getTotal(): Total
    {
        return $this->total;
    }

    public function getTransporte(): ?Transporte
    {
        return $this->transporte;
    }

    public function getPagamentos(): array
    {
        return $this->pagamentos;
    }

    public function getInformacoesComplementares(): ?string
    {
        return $this->informacoesComplementares;
    }

    public function getIntermediadorTransacao(): ?Pessoa
    {
        return $this->intermediadorTransacao;
    }

    public function getIntermediador(): IntermediadorEnum
    {
        return $this->intermediador;
    }

    /**
     * @throws ConfigurationRequiredError
     * @throws Exception
     */
    public function send(): Response
    {
        return $this
            ->getCallApiInstance($this->config)
            ->send('POST', '/nfe', [
                $this->toArray()
            ]);
    }
}
