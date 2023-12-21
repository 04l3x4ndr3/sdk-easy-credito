<?php
namespace O4l3x4ndr3\SdkEasyCredito\Helpers\Enum;

enum HomeType: string
{
    case ALUGADA = "ALUGADA";
    case PARENTES = "PARENTES";
    case FUNCIONAL = "VIUVO";
    case PROPRIA_QUITADA = "PROPRIA_QUITADA";
    case PROPRIA_FINANCIADA = "PROPRIA_FINANCIADA";
    case OUTROS  = "OUTROS ";
}