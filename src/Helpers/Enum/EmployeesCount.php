<?php
namespace O4l3x4ndr3\SdkEasyCredito\Helpers\Enum;

enum EmployeesCount: string
{
    case NENHUM = "NENHUM";
    case DE_1_A_5 = "DE 1 A 5";
    case DE_6_A_10 = "DE 6 A 10";
    case DE_11_A_20 = "DE 11 A 20";
    case DE_21_A_50 = "DE 21 A 50";
    case DE_51_A_100 = "DE 51 A 100";
    case MAIS_DE_100 = "MAIS DE 100";
}