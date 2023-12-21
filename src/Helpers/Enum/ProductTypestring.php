<?php
namespace O4l3x4ndr3\SdkEasyCredito\Helpers\Enum;

enum ProductTypestring: string
{
    case LOAN = "LOAN";
    case CARD = "CARD";
    case REFINANCING_AUTO = "REFINANCING_AUTO";
    case REFINANCING_HOME = "REFINANCING_HOME";
    case FINANCING_AUTO = "FINANCING_AUTO";
    case CAAS = "CAAS";
    case WORKING_CAPITAL = "WORKING_CAPITAL";
    case DEBT = "DEBT";
}