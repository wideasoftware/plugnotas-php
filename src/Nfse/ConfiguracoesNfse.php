<?php

namespace TecnoSpeed\Plugnotas\Nfse;

use Exception;
use Respect\Validation\Validator as v;
use TecnoSpeed\Plugnotas\Error\ValidationError;
use TecnoSpeed\Plugnotas\Dto\ConfiguracaoRpsDto;
use TecnoSpeed\Plugnotas\Dto\ConfiguracoesNfseDto;
use TecnoSpeed\Plugnotas\Dto\PrefeituraDto;
use TecnoSpeed\Plugnotas\Traits\DataTransform;

readonly class ConfiguracoesNfse
{
    use DataTransform;

    public function __construct(
        private ConfiguracoesNfseDto $dto
    )
    {
    }

    public function getNfseNacional(): ?bool
    {
        return $this->dto->nfseNacional;
    }

    public function getConsultaNfseNacional(): ?bool
    {
        return $this->dto->consultaNfseNacional;
    }

    public function getRps(): ?ConfiguracaoRpsDto
    {
        return $this->dto->rps;
    }

    public function getPrefeitura(): ?PrefeituraDto
    {
        return $this->dto->prefeitura;
    }

    public function getEmail(): ?array
    {
        return $this->dto->email;
    }

    public function getProducao(): bool
    {
        return $this->dto->producao;
    }

    public function getAtivo(): bool
    {
        return $this->dto->ativo;
    }

    public function getTipoContrato(): bool
    {
        return $this->dto->tipoContrato;
    }

    /**
     * @throws ValidationError
     * @throws Exception
     */
    public function validate(): void
    {
        $data = $this->toArray();

        $validacao = v::arrayType()
            ->key('ativo', v::boolType()->notEmpty())
            ->key('producao', v::boolType())
            ->key('nfseNacional', v::boolType())
            ->key('consultaNfseNacional', v::boolType())
            ->keyNested(
                'rps.numeracao',
                v::arrayType()->each(
                    v::arrayType()
                        ->key('serie', v::stringType()->notEmpty())
                        ->key('numero', v::numericVal()->notOptional())
                )
            )
            ->keyNested('rps.lote', v::intVal())
            ->keyNested('rps.numeracaoAutomatica', v::boolVal())
            ->keyNested('rps.agrupaLoteAutomatico', v::boolVal())
            ->keyNested('rps.agrupaLoteComSerieAutomatico', v::boolVal())
            ->keyNested('prefeitura.login', v::stringType())
            ->keyNested('prefeitura.senha', v::stringType())
            ->key(
                'email',
                v::arrayType()->key('envio')->notEmpty()
            )
            ->validate($data);

        if (!$validacao) {
            throw new ValidationError('Os parâmetros mínimos para criar uma empresa não foram preenchidos.');
        }
    }
}
