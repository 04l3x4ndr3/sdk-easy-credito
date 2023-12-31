<?php
namespace O4l3x4ndr3\SdkEasyCredito\Helpers\Enum;

enum EmploymentSince: string
{
    case LESS_THAN_SIX_MONTHS = "LESS_THAN_SIX_MONTHS";
    case BETWEEN_SIX_MONTHS_AND_ONE_YEAR = "BETWEEN_SIX_MONTHS_AND_ONE_YEAR";
    case BETWEEN_ONE_AND_TWO_YEARS = "BETWEEN_ONE_AND_TWO_YEARS";
    case BETWEEN_TWO_AND_THREE_YEARS = "BETWEEN_TWO_AND_THREE_YEARS";
    case BETWEEN_THREE_AND_FOUR_YEARS = "BETWEEN_THREE_AND_FOUR_YEARS";
    case BETWEEN_FOUR_AND_FIVE_YEARS = "BETWEEN_FOUR_AND_FIVE_YEARS";
    case BETWEEN_FIVE_AND_TEN_YEARS = "BETWEEN_FIVE_AND_TEN_YEARS";
    case MORE_THAN_TEN_YEARS = "MORE_THAN_TEN_YEARS";
}