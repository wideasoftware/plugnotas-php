<?php

namespace TecnoSpeed\Plugnotas\Enums;

enum ModalidadeFreteEnum: string
{
    case POR_CONTA_DO_EMITENTE = "0";
    case POR_CONTA_DO_DESTINATARIO_OU_REMETENTE = "1";
    case POR_CONTA_DE_TERCEIROS = "2";
    case TRANSPORTE_PROPRIO_POR_CONTA_DO_REMETENTE = "3";
    case TRANSPORTE_PROPRIO_POR_CONTA_DO_DESTINATARIO = "4";
    case SEM_FRETE = "9";
}
