<?php

require_once '../../vendor/autoload.php';
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation;

$array = [];

for($i = 0; $i < count(Occupation::cases()); $i++) {
    $array[] = [
        "key" => (Occupation::cases()[$i])->name,
        "value"=> (Occupation::cases()[$i])->value
    ];
}

echo json_encode($array);
