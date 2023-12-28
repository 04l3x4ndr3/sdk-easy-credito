<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Bank;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(Bank::cases()); $i++) {
    $array[] = [
        "key" => (Bank::cases()[$i])->name,
        "value"=> (Bank::cases()[$i])->value
    ];
}

echo json_encode($array);
