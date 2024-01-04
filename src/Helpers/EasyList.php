<?php

namespace O4l3x4ndr3\SdkEasyCredito\Helpers;

class EasyList
{
    public static function accountType(?int $key) : string
    {
        $list = [
            0 => "CONTA_CORRENTE_INDIVIDUAL",
            1 => "CONTA_CORRENTE_CONJUNTA",
            2 => "CONTA_POUPANCA_CONJUNTA",
            3 => "CONTA_POUPANCA_INDIVIDUAL"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function employmentSince(?int $key) : string
    {
        $list = [
            0 => "LESS_THAN_SIX_MONTHS",
            1 => "BETWEEN_SIX_MONTHS_AND_ONE_YEAR",
            2 => "BETWEEN_ONE_AND_TWO_YEARS",
            3 => "BETWEEN_TWO_AND_THREE_YEARS",
            4 => "BETWEEN_THREE_AND_FOUR_YEARS",
            5 => "BETWEEN_FOUR_AND_FIVE_YEARS",
            6 => "BETWEEN_FIVE_AND_TEN_YEARS",
            7 => "MORE_THAN_TEN_YEARS"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function homeSince(?int $key) : string
    {
        $list = [
            0 => "MENOR_6_MESES",
            1 => "MENOR_1_ANO",
            2 => "MENOR_2_ANOS",
            3 => "MAIOR_2_ANOS"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function homeType(?int $key) : string
    {
        $list = [
            0 => "ALUGADA",
            1 => "PARENTES",
            2 => "FUNCIONAL",
            3 => "PROPRIA_QUITADA",
            4 => "PROPRIA_FINANCIADA",
            5 => "OUTROS"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function occupation(?int $key) : string
    {
        $list = [
            0 => "APOSENTADO_PENSIONISTA",
            1 => "AUTONOMO",
            2 => "EMPRESARIO",
            3 => "PROFISSIONAL_LIBERAL",
            4 => "ASSALARIADO",
            5 => "FUNCIONARIO_PUBLICO",
            6 => "DESEMPREGADO "
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function education(?int $key) : string
    {
        $list = [
            0 => "NAO_ALFABETIZADO",
            1 => "ENSINO_FUNDAMENTAL_INCOMPLETO",
            2 => "ENSINO_FUNDAMENTAL_COMPLETO",
            3 => "ENSINO_MEDIO_INCOMPLETO",
            4 => "ENSINO_MEDIO_COMPLETO",
            5 => "ENSINO_SUPERIOR_INCOMPLETO",
            6 => "ENSINO_SUPERIOR_COMPLETO",
            7 => "POS_GRADUACAO"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function relationshipStatus(?int $key) : string
    {
        $list = [
            0 => "SOLTEIRO",
            1 => "CASADO",
            2 => "DIVORCADO",
            3 => "SEPARADO",
            4 => "VIUVO",
            5 => "SOLTEIRO",
            6 => "OUTROS",
            7 => "COMPANHEIRO",
            8 => "UNIAO_ESTAVEL",
            9 => "SEPARADO_JUDICIALMENTE"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
}
