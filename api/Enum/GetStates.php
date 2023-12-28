<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(States::cases()); $i++) {
    $array[] = [
        "key" => (States::cases()[$i])->name,
        "value"=> (States::cases()[$i])->value
    ];
}

echo json_encode($array);
