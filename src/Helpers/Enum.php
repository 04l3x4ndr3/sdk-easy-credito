<?php

namespace O4l3x4ndr3\SdkEasyCredito\Enum;

/**
 * @link: Doc PHP Enum [https://www.php.net/manual/pt_BR/language.enumerations.backed.php]
 */
enum Scopes: string
{
    case EXTERNAL_CASE = "api-externalcase ";
    case CASS = "api-caas";
    case BU_CAA = "api-bu-caas";
}

enum States: int
{
    case ES = 21;
}

enum ProductTypestring: int
{
    case LOAN = 0;
}

# Todo: Continue;