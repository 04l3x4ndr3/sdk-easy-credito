<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\BusinessProfession;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(BusinessProfession::cases()); $i++) {
    $array[] = [
        "key" => (BusinessProfession::cases()[$i])->name,
        "value"=> (BusinessProfession::cases()[$i])->value
    ];
}

echo json_encode($array);
