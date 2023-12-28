<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmployeesCount;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(EmployeesCount::cases()); $i++) {
    $array[] = [
        "key" => (EmployeesCount::cases()[$i])->name,
        "value"=> (EmployeesCount::cases()[$i])->value
    ];
}

echo json_encode($array);
