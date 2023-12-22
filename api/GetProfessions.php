<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Profession;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProfessionDescription;

require_once '../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(ProfessionDescription::cases()); $i++) {
    $array[] = [
        "key" => json_encode(Profession::cases()[$i]),
        "value"=> json_encode(ProfessionDescription::cases()[$i])
    ];
}

echo json_encode($array);