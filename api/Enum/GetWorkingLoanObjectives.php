<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\WorkingCapitalLoanObjectives;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(WorkingCapitalLoanObjectives::cases()); $i++) {
    $array[] = [
        "key" => (WorkingCapitalLoanObjectives::cases()[$i])->name,
        "value"=> (WorkingCapitalLoanObjectives::cases()[$i])->value
    ];
}

echo json_encode($array);
