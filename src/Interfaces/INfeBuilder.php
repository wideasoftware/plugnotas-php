<?php

namespace TecnoSpeed\Plugnotas\Interfaces;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Nfe;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Configuration;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\FormasDePagamentoEnum;
use TecnoSpeed\Plugnotas\Enums\ModalidadeFreteEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;

interface INfeBuilder
{
    /**
     * @param string $idIntegracao
     * @return self
     */
    public function setIdIntegracao(string $idIntegracao): self;

    /**
     * @param FinalidadeNfeEnum $finalidade
     * @return self
     */
    public function setFinalidade(FinalidadeNfeEnum $finalidade): self;

    /**
     * @param string $natureza
     * @return self
     */
    public function setNatureza(string $natureza): self;

    /**
     * @param string $dataEmissao
     * @return self
     */
    public function setDataEmissao(string $dataEmissao): self;

    /**
     * @param PresencialEnum $presencial
     * @return self
     */
    public function setPresencial(PresencialEnum $presencial): self;

    /**
     * @param bool $consumidorFinal
     * @return self
     */
    public function setConsumidorFinal(bool $consumidorFinal): self;

    /**
     * @param Pessoa $emitente
     * @return self
     */
    public function setEmitente(Pessoa $emitente): self;

    /**
     * @param Pessoa $destinatario
     * @return self
     */
    public function setDestinatario(Pessoa $destinatario): self;

    /**
     * @param Item $itens
     * @return self
     */
    public function setItens(Item $itens): self;

    /**
     * @param float|null $pisRetido
     * @param float|null $cofinsRetido
     * @param float|null $irrfRetido
     * @param float|null $csllRetido
     * @param float|null $prevSocialRetido
     * @return self
     */
    public function setRetencoes(?float $pisRetido, ?float $cofinsRetido, ?float $irrfRetido, ?float $csllRetido, ?float $prevSocialRetido): self;

    /**
     * @param ModalidadeFreteEnum $modalidadeFrete
     * @param Pessoa|null $transportador
     * @param string|null $placaVeiculo
     * @param string|null $ufPlaca
     * @param string|null $rntc
     * @param float|null $quantidadeVolTransp
     * @param string|null $EspTransp
     * @param string|null $marcaVolTransp
     * @param string|null $NumVolTransp
     * @param float|null $pesoLiquido
     * @param float|null $pesoBruto
     * @return self
     */
    public function setTransporte
    (
        ModalidadeFreteEnum $modalidadeFrete,
        ?Pessoa             $transportador,
        ?string             $placaVeiculo,
        ?string             $ufPlaca,
        ?string             $rntc,
        ?float              $quantidadeVolTransp,
        ?string             $EspTransp,
        ?string             $marcaVolTransp,
        ?string             $NumVolTransp,
        ?float              $pesoLiquido,
        ?float              $pesoBruto,
    ): self;

    /**
     * @param FormasDePagamentoEnum $meio
     * @param string|null $descricaoMeio
     * @param float $valor
     * @param string|null $data
     * @return self
     */
    public function setPagamentos(FormasDePagamentoEnum $meio, ?string $descricaoMeio, float $valor, ?string $data): self;

    /**
     * @param string $informacoesComplementares
     * @return self
     */
    public function setInformacoesComplementares(string $informacoesComplementares): self;

    /**
     * @param Pessoa $intermediadorTransacao
     * @return self
     */
    public function setIntermediadorTransacao(Pessoa $intermediadorTransacao): self;

    /**
     * @param int $intermediador
     * @return self
     */
    public function setIntermediador(int $intermediador): self;

    /**
     * @param Configuration $configuration
     * @return self
     */
    public function setConfiguration(Configuration $configuration): self;

    public function build(): Nfe;
}
