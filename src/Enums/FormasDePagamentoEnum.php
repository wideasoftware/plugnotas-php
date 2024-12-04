<?php

namespace TecnoSpeed\Plugnotas\Enums;

enum FormasDePagamentoEnum: string
{
    case DINHEIRO = "1";
    case CHEQUE = "2";
    case CARTAO_CREDITO = "3";
    case CARTAO_DEBITO = "4";
    case CARTAO_LOJA = "5";
    case VALE_ALIMENTACAO = "10";
    case VALE_REFEICAO = "11";
    case VALE_PRESENTE = "12";
    case VALE_COMBUSTIVEL = "13";
    case BOLETO_BANCARIO = "15";
    case DEPOSITO_BANCARIO = "16";
    case PAGAMENTO_PIX_DINAMICO = "17";
    case TRANSFERENCIA_BANCARIA_CARTEIRA_DIGITAL = "18";
    case PROGRAMA_FIDELIDADE_CASHBACK_CREDITO_VIRTUAL = "19";
    case PAGAMENTO_PIX_ESTATICO = "20";
    case CREDITO_EM_LOJA = "21";
    case PAGAMENTO_NAO_INFORMADO_FALHA_HARDWARE = "22";
    case SEM_PAGAMENTO = "90";
    case OUTROS = "99";
}
