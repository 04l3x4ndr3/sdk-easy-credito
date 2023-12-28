<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmploymentSince;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(EmploymentSince::cases()); $i++) {
    $array[] = [
        "key" => (EmploymentSince::cases()[$i])->name,
        "value"=> (EmploymentSince::cases()[$i])->value
    ];
}

echo json_encode($array);
