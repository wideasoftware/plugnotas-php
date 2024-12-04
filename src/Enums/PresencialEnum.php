<?php

namespace TecnoSpeed\Plugnotas\Enums;

enum PresencialEnum: string
{
    case NAO_SE_APLICA = '0';
    case OPERACAO_PRESENCIAL = '1';
    case OPERACAO_NAO_PRESENCIAL_INTERNET = '2';
    case OPERACAO_NAO_PRESENCIAL_TELEATENDIMENTO = '3';
    case OPERACAO_PRESENCIAL_FORA_ESTABELECIMENTO = '5';
    case OPERACAO_NAO_PRESENCIAL_OUTROS = '9';
}
