<?php

namespace TecnoSpeed\Plugnotas\Enums;

enum CstIpiEnum: string
{
    case ENTRADA_COM_RECUPERACAO_DE_CREDITO = '00';
    case ENTRADA_TRIBUTADA_ALIQUOTA_ZERO = '01';
    case ENTRADA_ISENTA = '02';
    case ENTRADA_NAO_TRIBUTADA = '03';
    case ENTRADA_IMUNE = '04';
    case ENTRADA_COM_SUSPENSAO = '05';
    case OUTRAS_ENTRADAS = '49';
    case SAIDA_TRIBUTADA = '50';
    case SAIDA_TRIBUTADA_ALIQUOTA_ZERO = '51';
    case SAIDA_ISENTA = '52';
    case SAIDA_NAO_TRIBUTADA = '53';
    case SAIDA_IMUNE = '54';
    case SAIDA_COM_SUSPENSAO = '55';
    case OUTRAS_SAIDAS = '99';
}
