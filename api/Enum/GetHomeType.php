<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeType;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(HomeType::cases()); $i++) {
    $array[] = [
        "key" => (HomeType::cases()[$i])->name,
        "value"=> (HomeType::cases()[$i])->value
    ];
}

echo json_encode($array);
