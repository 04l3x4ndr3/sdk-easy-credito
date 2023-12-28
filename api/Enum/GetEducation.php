<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(Education::cases()); $i++) {
    $array[] = [
        "key" => (Education::cases()[$i])->name,
        "value"=> (Education::cases()[$i])->value
    ];
}

echo json_encode($array);
