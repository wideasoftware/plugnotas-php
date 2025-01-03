<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Dto\ConfiguracaoRpsDto;
use TecnoSpeed\Plugnotas\Dto\ConfiguracoesNfseDto;
use TecnoSpeed\Plugnotas\Dto\PrefeituraDto;
use TecnoSpeed\Plugnotas\Nfse\ConfiguracoesNfse;

class ConfiguracoesNfseBuilder
{
    private ?bool $nfseNacional = null;
    private ?bool $consultaNfseNacional = null;
    private ?ConfiguracaoRpsDto $rps = null;
    private ?PrefeituraDto $prefeitura = null;
    private ?array $email = null;
    private ?bool $producao = null;

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
        ?int $lote,
        ?array $numeracao,
        ?bool $numeracaoAutomatica,
        ?bool $agrupaLoteAutomatico,
        ?bool $agrupaLoteComSerieAutomatico
    ): ConfiguracoesNfseBuilder
    {
        $rpsDto = new ConfiguracaoRpsDto(
            lote: $lote,
            numeracao: $numeracao,
            numeracaoAutomatica: $numeracaoAutomatica,
            agrupaLoteAutomatico: $agrupaLoteAutomatico,
            agrupaLoteComSerieAutomatico: $agrupaLoteComSerieAutomatico
        );

        $this->rps = $rpsDto;
        return $this;
    }

    public function setPrefeitura(?string $login, ?string $senha): ConfiguracoesNfseBuilder
    {
        $prefeituraDto = new PrefeituraDto(
            login: $login,
            senha: $senha
        );

        $this->prefeitura = $prefeituraDto;
        return $this;
    }

    public function setEmail(?array $email): ConfiguracoesNfseBuilder
    {
        $this->email = $email;
        return $this;
    }

    public function setProducao(?bool $producao): ConfiguracoesNfseBuilder
    {
        $this->producao = $producao;
        return $this;
    }

    public function build(): ConfiguracoesNfse
    {
        $configuracoesNfseDto = new ConfiguracoesNfseDto(
            nfseNacional: $this->nfseNacional,
            consultaNfseNacional: $this->consultaNfseNacional,
            rps: $this->rps,
            prefeitura: $this->prefeitura,
            email: $this->email,
            producao: $this->producao
        );
        return new ConfiguracoesNfse($configuracoesNfseDto);
    }
}
