<?php

namespace O4l3x4ndr3\SdkEasyCredito\Helpers\Enum;

/**
 * @link: Doc PHP Enum [https://www.php.net/manual/pt_BR/language.enumerations.backed.php]
 */

enum PipelineStatus: string
{
    case SIGNUP_ANALISIS = "SIGNUP_ANALISIS";
    case SIGNUP_COMPLETED = "SIGNUP_COMPLETED";
    case SIGNUP_DENIED = "SIGNUP_DENIED";
    case PROPOSAL_ANALISIS = "PROPOSAL_ANALISIS";
    case PROPOSAL_CREATED = "PROPOSAL_CREATED";
    case PROPOSAL_DENIED = "PROPOSAL_DENIED";
}
