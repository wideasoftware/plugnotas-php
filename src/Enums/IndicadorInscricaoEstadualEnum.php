<?php

namespace TecnoSpeed\Plugnotas\Enums;

enum IndicadorInscricaoEstadualEnum: int
{
    case CONTRIBUINTE_ICMS = 1;
    case CONTRIBUINTE_ISENTO = 2;
    case NAO_CONTRIBUINTE = 9;
}
