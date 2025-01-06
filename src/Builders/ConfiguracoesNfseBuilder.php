<?php

namespace TecnoSpeed\Plugnotas\Builders;

use Exception;
use TecnoSpeed\Plugnotas\Dto\ConfiguracaoRpsDto;
use TecnoSpeed\Plugnotas\Dto\ConfiguracoesNfseDto;
use TecnoSpeed\Plugnotas\Dto\PrefeituraDto;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Nfse\ConfiguracoesNfse;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

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
            numeracao: $numeracao,
            numeracaoAutomatica: $numeracaoAutomatica,
            agrupaLoteAutomatico: $agrupaLoteAutomatico,
            agrupaLoteComSerieAutomatico: $agrupaLoteComSerieAutomatico,
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
    public function validate(): bool
    {
        $data = $this->toArray();

        $validacao = v::arrayType()
            ->key('ativo', v::boolType()->notEmpty())
            ->key('email', v::arrayType()
                ->key('envio')->notEmpty())
            ->key('rps', v::arrayType()->each(
                v::arrayType()
                    ->key('numero', v::numericVal(), true)
                    ->key('serie', v::stringType(), true)
            ), true)
            ->key('prefeitura', v::arrayType()
                ->key('login', v::stringType())
                ->key('senha', v::stringType()))
            ->validate($data);

        if (!$validacao) {
            throw new ValidationError('Os parâmetros mínimos para criar uma empresa não foram preenchidos.');
        }
    }

    /**
     * @throws Exception
     */
    public function build(): ConfiguracoesNfse
    {
        $this->validate();

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
