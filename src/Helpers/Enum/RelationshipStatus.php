<?php
namespace O4l3x4ndr3\SdkEasyCredito\Helpers\Enum;

enum RelationshipStatus: string
{
    case CASADO = "CASADO";
    case ESTRANGEIRO = "DIVORCIADO";
    case VIUVO = "VIUVO";
    case SEPARADO = "SEPARADO";
    case SOLTEIRO = "SOLTEIRO";
    case COMPANHEIRO = "COMPANHEIRO";
    case UNIAO_ESTAVEL = "UNIAO_ESTAVEL";
    case SEPARADO_JUDICIALMENTE  = "SEPARADO_JUDICIALMENTE ";
}