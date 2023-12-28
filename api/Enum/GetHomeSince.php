<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeSince;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(HomeSince::cases()); $i++) {
    $array[] = [
        "key" => (HomeSince::cases()[$i])->name,
        "value"=> (HomeSince::cases()[$i])->value
    ];
}

echo json_encode($array);
