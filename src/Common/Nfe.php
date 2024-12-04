<?php

namespace TecnoSpeed\Plugnotas\Common;

use Exception;
use TecnoSpeed\Plugnotas\Communication\Response;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;
use TecnoSpeed\Plugnotas\Error\ConfigurationRequiredError;
use TecnoSpeed\Plugnotas\Traits\Communication;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

class Nfe
{
    use Communication, DataTransform;

    /**
     * @var string|null
     */
    private ?string $idIntegracao;
    /**
     * @var FinalidadeNfeEnum|null
     */
    private ?FinalidadeNfeEnum $finalidade;
    /**
     * @var string|null
     */
    private ?string $natureza;
    /**
     * @var string|null
     */
    private ?string $dataEmissao;
    /**
     * @var PresencialEnum|null
     */
    private ?PresencialEnum $presencial;
    /**
     * @var bool|null
     */
    private ?bool $consumidorFinal;

    /**
     * @var Pessoa
     */
    private Pessoa $emitente;
    /**
     * @var Pessoa
     */
    private Pessoa $destinatario;

    /**
     * @var Item
     */
    private Item $itens;
    /**
     * @var array|null
     */
    private ?array $retencoes;
    /**
     * @var array|null
     */
    private ?array $transporte;

    /**
     * @var array
     */
    private array $pagamentos;

    /**
     * @var string|null
     */
    private ?string $informacoesComplementares;

    /**
     * @var array|null
     */
    private ?array $intermediadorTransacao;

    /**
     * @var int|null
     */
    private ?int $intermediador;
    private ?Configuration $configuration;

    /**
     * @param string|null $idIntegracao
     * @param FinalidadeNfeEnum $finalidade
     * @param string|null $natureza
     * @param string|null $dataEmissao
     * @param PresencialEnum|null $presencial
     * @param bool|null $consumidorFinal
     * @param Pessoa|null $emitente
     * @param Pessoa|null $destinatario
     * @param Item $itens
     * @param array|null $retencoes
     * @param array|null $transporte
     * @param array|null $pagamentos
     * @param string|null $informacoesComplementares
     * @param array|null $intermediadorTransacao
     * @param int|null $intermediador
     * @param Configuration|null $configuration
     */
    public function __construct
    (
        ?string           $idIntegracao,
        FinalidadeNfeEnum $finalidade,
        ?string           $natureza,
        ?string           $dataEmissao,
        ?PresencialEnum   $presencial,
        ?bool             $consumidorFinal,
        ?Pessoa           $emitente,
        ?Pessoa           $destinatario,
        Item              $itens,
        ?array            $retencoes,
        ?array            $transporte,
        ?array            $pagamentos,
        ?string           $informacoesComplementares,
        ?array            $intermediadorTransacao,
        ?int              $intermediador,
        ?Configuration    $configuration
    )
    {
        $this->idIntegracao = $idIntegracao;
        $this->finalidade = $finalidade;
        $this->natureza = $natureza;
        $this->dataEmissao = $dataEmissao;
        $this->presencial = $presencial;
        $this->consumidorFinal = $consumidorFinal;
        $this->emitente = $emitente;
        $this->destinatario = $destinatario;
        $this->itens = $itens;
        $this->retencoes = $retencoes;
        $this->transporte = $transporte;
        $this->pagamentos = $pagamentos;
        $this->informacoesComplementares = $informacoesComplementares;
        $this->intermediadorTransacao = $intermediadorTransacao;
        $this->intermediador = $intermediador;
        $this->configuration = $configuration;
    }

    /**
     * @return string|null
     */
    public function getIdIntegracao(): ?string
    {
        return $this->idIntegracao;
    }

    /**
     * @return FinalidadeNfeEnum|null
     */
    public function getFinalidade(): ?FinalidadeNfeEnum
    {
        return $this->finalidade;
    }

    /**
     * @return string|null
     */
    public function getNatureza(): ?string
    {
        return $this->natureza;
    }

    /**
     * @return string|null
     */
    public function getDataEmissao(): ?string
    {
        return $this->dataEmissao;
    }

    /**
     * @return PresencialEnum|null
     */
    public function getPresencial(): ?PresencialEnum
    {
        return $this->presencial;
    }

    /**
     * @return bool|null
     */
    public function getConsumidorFinal(): ?bool
    {
        return $this->consumidorFinal;
    }

    /**
     * @return Pessoa
     */
    public function getEmitente(): Pessoa
    {
        return $this->emitente;
    }

    /**
     * @return Pessoa
     */
    public function getDestinatario(): Pessoa
    {
        return $this->destinatario;
    }

    /**
     * @return Item
     */
    public function getItens(): Item
    {
        return $this->itens;
    }

    /**
     * @return array|null
     */
    public function getRetencoes(): ?array
    {
        return $this->retencoes;
    }

    /**
     * @return array|null
     */
    public function getTransporte(): ?array
    {
        return $this->transporte;
    }

    /**
     * @return array
     */
    public function getPagamentos(): array
    {
        return $this->pagamentos;
    }

    /**
     * @return string|null
     */
    public function getInformacoesComplementares(): ?string
    {
        return $this->informacoesComplementares;
    }

    /**
     * @return array|null
     */
    public function getIntermediadorTransacao(): ?array
    {
        return $this->intermediadorTransacao;
    }

    /**
     * @return int|null
     */
    public function getIntermediador(): ?int
    {
        return $this->intermediador;
    }

    /**
     * @return Response
     * @throws ConfigurationRequiredError
     * @throws Exception
     */
    public function send(): Response
    {
        return $this->getCallApiInstance($this->configuration)->send('POST', '/nfe', [$this->toArray()]);
    }
}
