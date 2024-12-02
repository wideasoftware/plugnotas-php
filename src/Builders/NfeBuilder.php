<?php

namespace TecnoSpeed\Plugnotas\Builders;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;
use TecnoSpeed\Plugnotas\Interfaces\INfeBuilder;

class NfeBuilder implements INfeBuilder
{
    public function setIdIntegracao(string $integracao): INfeBuilder
    {
        // TODO: Implement setIdIntegracao() method.
    }

    public function setFinalidade(FinalidadeNfeEnum $finalidade): INfeBuilder
    {
        // TODO: Implement setFinalidade() method.
    }

    public function setNatureza(string $natureza): INfeBuilder
    {
        // TODO: Implement setNatureza() method.
    }

    public function setDataEmissao(string $dataEmissao): INfeBuilder
    {
        // TODO: Implement setDataEmissao() method.
    }

    public function setPresencial(PresencialEnum $presencial): INfeBuilder
    {
        // TODO: Implement setPresencial() method.
    }

    public function setConsumidorFinal(bool $consumidorFinal): INfeBuilder
    {
        // TODO: Implement setConsumidorFinal() method.
    }

    public function setEmitente(Pessoa $emitente): INfeBuilder
    {
        // TODO: Implement setEmitente() method.
    }

    public function setDestinatario(Pessoa $destinatario): INfeBuilder
    {
        // TODO: Implement setDestinatario() method.
    }

    public function setItens(Item $itens): INfeBuilder
    {
        // TODO: Implement setItens() method.
    }

    public function setRetencoes(array $retencoes): INfeBuilder
    {
        // TODO: Implement setRetencoes() method.
    }

    public function setTransporte(array $transporte): INfeBuilder
    {
        // TODO: Implement setTransporte() method.
    }

    public function setPagamentos(array $pagamentos): INfeBuilder
    {
        // TODO: Implement setPagamentos() method.
    }

    public function setInformacoesComplementares(string $informacoesComplementares): INfeBuilder
    {
        // TODO: Implement setInformacoesComplementares() method.
    }

    public function setIntermediadorTransacao(array $intermediadorTransacao): INfeBuilder
    {
        // TODO: Implement setIntermediadorTransacao() method.
    }

    public function setIntermediador(int $intermediador): INfeBuilder
    {
        // TODO: Implement setIntermediador() method.
    }

    public function setConfiguration(Configuration $configuration): INfeBuilder
    {
        // TODO: Implement setConfiguration() method.
    }
}
