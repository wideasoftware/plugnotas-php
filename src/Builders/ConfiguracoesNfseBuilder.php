<?php

namespace TecnoSpeed\Plugnotas\Builders;

use Exception;
use TecnoSpeed\Plugnotas\Dto\ConfiguracaoRpsDto;
use TecnoSpeed\Plugnotas\Dto\ConfiguracoesNfseDto;
use TecnoSpeed\Plugnotas\Dto\PrefeituraDto;
use TecnoSpeed\Plugnotas\Nfse\ConfiguracoesNfse;
use TecnoSpeed\Plugnotas\Traits\DataTransform;
use Respect\Validation\Validator as v;

class ConfiguracoesNfseBuilder
{
    use DataTransform;

    private ?ConfiguracaoRpsDto $rps = null;
    private ?PrefeituraDto $prefeitura = null;
    private bool $producao;
    private bool $ativo;
    private int $tipoContrato = 0;

    public function setRps(
        ?int   $lote,
        ?array $numeracao,
    ): ConfiguracoesNfseBuilder
    {
        $rpsDto = new ConfiguracaoRpsDto(
            lote: $lote,
            numeracao: array_map(
                fn($numeracao) => ['numero' => $numeracao['number'], 'serie' => $numeracao['serial']],
                $numeracao
            ),
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
            rps: $this->rps,
            prefeitura: $this->prefeitura,
            producao: $this->producao,
            ativo: $this->ativo,
            tipoContrato: 0
        );
        return new ConfiguracoesNfse($configuracoesNfseDto);
    }
}
