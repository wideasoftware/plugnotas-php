<?php

namespace TecnoSpeed\Plugnotas\Builders;

use Exception;
use TecnoSpeed\Plugnotas\Dto\ConfiguracaoRpsDto;
use TecnoSpeed\Plugnotas\Dto\ConfiguracoesNfseDto;
use TecnoSpeed\Plugnotas\Dto\PrefeituraDto;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Nfse\ConfiguracoesNfse;
use TecnoSpeed\Plugnotas\Traits\DataTransform;
use Respect\Validation\Validator as v;

class ConfiguracoesNfseBuilder
{
    use DataTransform;

    private ?bool $nfseNacional = null;
    private ?bool $consultaNfseNacional = null;
    private ?ConfiguracaoRpsDto $rps = null;
    private ?PrefeituraDto $prefeitura = null;
    private ?array $email = null;
    private bool $producao;
    private bool $ativo;
    private string $tipoContrato = '0';

    public function setNfseNacional(?bool $nfseNacional): ConfiguracoesNfseBuilder
    {
        $this->nfseNacional = $nfseNacional;
        return $this;
    }

    public function setConsultaNfseNacional(?bool $consultaNfseNacional): ConfiguracoesNfseBuilder
    {
        $this->consultaNfseNacional = $consultaNfseNacional;
        return $this;
    }

    public function setRps(
        ?int   $lote,
        ?array $numeracao,
        ?bool  $numeracaoAutomatica,
        ?bool  $agrupaLoteAutomatico,
        ?bool  $agrupaLoteComSerieAutomatico,
    ): ConfiguracoesNfseBuilder
    {
        $rpsDto = new ConfiguracaoRpsDto(
            lote: $lote,
            numeracao: array_map(
                fn($numeracao) => ['numero' => $numeracao['number'], 'serie' => $numeracao['serial']],
                $numeracao
            ),
            numeracaoAutomatica: $numeracaoAutomatica,
            agrupaLoteAutomatico: $agrupaLoteAutomatico,
            agrupaLoteComSerieAutomatico: $agrupaLoteComSerieAutomatico,
        );

        $this->rps = $rpsDto;
        return $this;
    }

    public function setPrefeitura(?string $login, ?string $senha): ConfiguracoesNfseBuilder
    {
        if ($login && $senha) {
            $prefeituraDto = new PrefeituraDto(
                login: $login,
                senha: $senha
            );

            $this->prefeitura = $prefeituraDto;
        }

        return $this;
    }

    public function setEnvioEmail(?bool $enviaEmail): ConfiguracoesNfseBuilder
    {
        $this->email = [
            'envio' => $enviaEmail
        ];

        return $this;

    }

    public function setProducao(bool $producao): ConfiguracoesNfseBuilder
    {
        $this->producao = $producao;
        return $this;
    }

    public function setAtivo(bool $ativo): ConfiguracoesNfseBuilder
    {
        $this->ativo = $ativo;
        return $this;
    }

    /**
     * @throws Exception
     */
    public function build(): ConfiguracoesNfse
    {
        $configuracoesNfseDto = new ConfiguracoesNfseDto(
            nfseNacional: $this->nfseNacional,
            consultaNfseNacional: $this->consultaNfseNacional,
            rps: $this->rps,
            prefeitura: $this->prefeitura,
            email: $this->email,
            producao: $this->producao,
            ativo: $this->ativo,
            tipoContrato: '0'
        );
        return new ConfiguracoesNfse($configuracoesNfseDto);
    }
}
