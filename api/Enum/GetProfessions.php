<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Profession;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProfessionDescription;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(ProfessionDescription::cases()); $i++) {
    $array[] = [
        "key" => (Profession::cases()[$i])->name,
        "value"=> (ProfessionDescription::cases()[$i])->value
    ];
}

echo json_encode($array);
