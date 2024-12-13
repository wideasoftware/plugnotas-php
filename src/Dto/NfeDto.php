<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Common\Item;
use TecnoSpeed\Plugnotas\Common\Pagamento;
use TecnoSpeed\Plugnotas\Common\Pessoa;
use TecnoSpeed\Plugnotas\Common\Total;
use TecnoSpeed\Plugnotas\Common\Transporte;
use TecnoSpeed\Plugnotas\Enums\FinalidadeNfeEnum;
use TecnoSpeed\Plugnotas\Enums\IntermediadorEnum;
use TecnoSpeed\Plugnotas\Enums\PresencialEnum;

readonly class NfeDto
{
    /**
     * @param string $idIntegracao
     * @param FinalidadeNfeEnum $finalidade
     * @param string $natureza
     * @param string $dataEmissao
     * @param PresencialEnum|null $presencial
     * @param bool|null $consumidorFinal
     * @param NotaReferenciadaDto|null $notaReferenciada
     * @param Pessoa $emitente
     * @param Pessoa $destinatario
     * @param Item[] $itens
     * @param Total|null $total
     * @param Transporte|null $transporte
     * @param Pagamento[] $pagamentos
     * @param string|null $informacoesComplementares
     * @param Pessoa|null $intermediadorTransacao
     * @param IntermediadorEnum|null $intermediador
     */
    public function __construct
    (
        public string               $idIntegracao,
        public FinalidadeNfeEnum    $finalidade,
        public string               $natureza,
        public string               $dataEmissao,
        public ?PresencialEnum      $presencial = PresencialEnum::OPERACAO_NAO_PRESENCIAL_OUTROS,
        public ?bool                $consumidorFinal = true,
        public ?NotaReferenciadaDto $notaReferenciada,
        public Pessoa               $emitente,
        public Pessoa               $destinatario,
        public array                $itens,
        public ?Total               $total,
        public ?Transporte          $transporte,
        public array                $pagamentos,
        public ?string              $informacoesComplementares,
        public ?Pessoa              $intermediadorTransacao,
        public ?IntermediadorEnum   $intermediador,
    )
    {
    }
}
