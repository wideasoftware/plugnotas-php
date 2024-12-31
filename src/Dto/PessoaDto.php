<?php

namespace TecnoSpeed\Plugnotas\Dto;

use TecnoSpeed\Plugnotas\Common\EnderecoV2;
use TecnoSpeed\Plugnotas\Enums\IndicadorInscricaoEstadualEnum;
use TecnoSpeed\Plugnotas\Enums\NaoNifEnum;

readonly class PessoaDto
{
    /**
     * @param string|null $nome
     * @param string|null $cpfCnpj
     * @param string|null $razaoSocial
     * @param EnderecoV2|null $endereco
     * @param string|null $email
     * @param string|null $inscricaoEstadual
     * @param string|null $inscricaoMunicipal
     * @param string|null $inscricaoSuframa
     * @param string|null $nomeFantasia
     * @param TelefoneDto|null $telefone
     * @param IndicadorInscricaoEstadualEnum|null $indicadorInscricaoEstadual
     * @param string|null $codigoEstrangeiro
     * @param NaoNifEnum|null $naoNif
     * @param string|null $identificadorCadastro
     */
    public function __construct
    (
        public string                          $nome,
        public string                          $cpfCnpj,
        public ?string                         $razaoSocial,
        public ?EnderecoV2                     $endereco,
        public ?string                         $email,
        public ?string                         $inscricaoEstadual,
        public ?string                         $inscricaoMunicipal,
        public ?string                         $inscricaoSuframa,
        public ?string                         $nomeFantasia,
        public ?TelefoneDto                    $telefone,
        public ?IndicadorInscricaoEstadualEnum $indicadorInscricaoEstadual,
        public ?string                         $codigoEstrangeiro,
        public ?NaoNifEnum                     $naoNif,
        public ?string                         $identificadorCadastro,
        public ?string                         $certificado,
        public ?bool                           $simplesNacional,
        public ?int                            $regimeTributario,
        public ?bool                           $incentivoFiscal,
        public ?bool                           $incentivadorCultural,
        public ?int                            $regimeTributarioEspecial
    )
    {
    }
}
