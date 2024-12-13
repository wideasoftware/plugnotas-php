<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Pagamento;
use TecnoSpeed\Plugnotas\Enums\FormasDePagamentoEnum;
use TecnoSpeed\Plugnotas\Error\ValidationError;

class PagamentoBuilder
{
    /**
     * @var bool|null
     */
    private ?bool $aVista;
    /**
     * @var FormasDePagamentoEnum|null
     */
    private ?FormasDePagamentoEnum $meio;
    /**
     * @var string|null
     */
    private ?string $descricaoMeio;
    /**
     * @var float
     */
    private float $valor;
    /**
     * @var string|null
     */
    private ?string $data;

    /**
     * @param bool|null $aVista
     * @return PagamentoBuilder
     */
    public function setAVista(?bool $aVista): PagamentoBuilder
    {
        $this->aVista = $aVista;
        return $this;
    }

    /**
     * @param string|null $meio
     * @return $this
     */
    public function setMeio(?string $meio): PagamentoBuilder
    {
        $this->meio = FormasDePagamentoEnum::from($meio);
        return $this;
    }

    /**
     * @param string|null $descricaoMeio
     * @return PagamentoBuilder
     */
    public function setDescricaoMeio(?string $descricaoMeio): PagamentoBuilder
    {
        $this->descricaoMeio = $descricaoMeio;
        return $this;
    }

    /**
     * @param float $valor
     * @return PagamentoBuilder
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

    /**
     * @param string|null $data
     * @return PagamentoBuilder
     */
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
