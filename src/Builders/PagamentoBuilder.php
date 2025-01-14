<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Pagamento;
use TecnoSpeed\Plugnotas\Enums\FormasDePagamentoEnum;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class PagamentoBuilder
{
    private ?bool $aVista;
    private ?FormasDePagamentoEnum $meio;
    private ?string $descricaoMeio;
    private float $valor;
    private ?string $data;

    public function setAVista(?bool $aVista): PagamentoBuilder
    {
        $this->aVista = $aVista;
        return $this;
    }

    public function setMeio(?string $meio): PagamentoBuilder
    {
        $this->meio = FormasDePagamentoEnum::from($meio);
        return $this;
    }

    public function setDescricaoMeio(?string $descricaoMeio): PagamentoBuilder
    {
        $this->descricaoMeio = $descricaoMeio;
        return $this;
    }

    /**
     * @throws ValidationError
     */
    public function setValor(float $valor): PagamentoBuilder
    {
        if ($valor < 0) {
            throw new ValidationError('Valor de pagamento inválido.');
        }

        $this->valor = $valor;
        return $this;
    }

    public function setData(?string $data): PagamentoBuilder
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return Pagamento
     */
    public function build(): Pagamento
    {
        return new Pagamento
        (
            aVista: $this->aVista,
            meio: $this->meio,
            descricaoMeio: $this->descricaoMeio,
            valor: $this->valor,
            data: $this->data
        );
    }


}
