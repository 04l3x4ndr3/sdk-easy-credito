<?php

namespace O4l3x4ndr3\SdkEasyCredito\Helpers;

class EasyList
{
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

        return $list[$key];
    }
}
