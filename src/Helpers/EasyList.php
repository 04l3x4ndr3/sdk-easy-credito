<?php

namespace O4l3x4ndr3\SdkEasyCredito\Helpers;

class EasyList
{
    public static function states(?int $key) : string
    {
        $list = [
            0 => 'AC',
            1 => 'AL',
            2 => 'AP',
            3 => 'AM',
            4 => 'BA',
            5 => 'CE',
            6 => 'DF',
            7 => 'ES',
            8 => 'GO',
            9 => 'MA',
            10 => 'MT',
            11 => 'MS',
            12 => 'MG',
            13 => 'PA',
            14 => 'PB',
            15 => 'PR',
            16 => 'PE',
            17 => 'PI',
            18 => 'RN',
            19 => 'RS',
            20 => 'RJ',
            21 => 'RO',
            22 => 'RR',
            23 => 'SC',
            24 => 'SP',
            25 => 'SE',
            26 => 'TO'
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function identityIssuer(?int $key) : string
    {
        $list = [
            0 => "SSP",
            1 => "DETRAN",
            2 => "CONS_REG_ECONOMIA",
            3 => "MIN_EXERCITO",
            4 => "OAB",
            5 => "CREA",
            6 => "SJS",
            7 => "CTPS",
            8 => "CREME",
            9 => "MINEX",
            10 => "CRM",
            11 => "SJTC",
            12 => "MAER",
            13 => "DPF",
            14 => "RBF",
            15 => "IML",
            16 => "CPROF",
            17 => "CRO",
            18 => "CRC",
            19 => "DPMAF",
            20 => "ME",
            21 => "BM",
            22 => "AERON",
            23 => "SJT",
            24 => "COREN",
            25 => "DETRA",
            26 => "EXERC",
            27 => "SSI",
            28 => "MINISTERIO_DA_MARINHA",
            29 => "CRA_CONSELHO_ADMINISTRATIVO",
            30 => "INSTITUTO_FELIX_PACHECO",
            31 => "INST_NAC_PROPRIEDADE_INDUSTRIA",
            32 => "MINISTERIO_DA_FAZENDA",
            33 => "TRIBUNAL_REGIONAL_DO_TRABALHO",
            34 => "CONSELHO_REGIONAL_PSICOLOGIA",
            35 => "POLICIA_MILITAR"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function creditStatus(?int $key) : string
    {
        $list = [
            0 => "PRE_PROCESSAMENTO",
            1 => "PRE_APROVADO",
            2 => "PENDENTE",
            3 => "AGUARDANDO_DOCUMENTOS",
            4 => "EM_ANALISE_MANUAL",
            5 => "EM_ANALISE_OPERACIONAL",
            6 => "EM_ANALISE_DOCUMENTAL",
            7 => "CONTRATADO",
            8 => "LIBERADO",
            9 => "REPROVADO",
            10 => "ESTORNO",
            11 => "EXPIRADO"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
    public static function pipelineStatus(?int $key) : string
    {
        $list = [
            0 => "SIGNUP_ANALISIS",
            1 => "SIGNUP_COMPLETED",
            2 => "SIGNUP_DENIED",
            3 => "PROPOSAL_ANALISIS",
            4 => "PROPOSAL_CREATED",
            5 => "PROPOSAL_DENIED"
        ];

        if (isset($key)) {
            return $list[$key];
        }

        return false;
    }
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
