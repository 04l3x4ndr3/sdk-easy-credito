<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RealEstateType;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(RealEstateType::cases()); $i++) {
    $array[] = [
        "key" => (RealEstateType::cases()[$i])->name,
        "value"=> (RealEstateType::cases()[$i])->value
    ];
}

echo json_encode($array);
