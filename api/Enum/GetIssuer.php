<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityIssuer;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(IdentityIssuer::cases()); $i++) {
    $array[] = [
        "key" => (IdentityIssuer::cases()[$i])->name,
        "value"=> (IdentityIssuer::cases()[$i])->value
    ];
}

echo json_encode($array);
