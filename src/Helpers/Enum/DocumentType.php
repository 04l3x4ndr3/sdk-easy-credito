<?php
namespace O4l3x4ndr3\SdkEasyCredito\Helpers\Enum;

enum DocumentType: string
{
    case SELF = "SELF";
    case IDENTITY_FRONT = "IDENTITY_FRONT";
    case IDENTITY_BACK = "IDENTITY_BACK";
    case ADDRESS_PROOF = "ADDRESS_PROOF";
    case INCOME_PROOF = "INCOME_PROOF";
}