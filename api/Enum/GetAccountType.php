<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\AccountType;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(AccountType::cases()); $i++) {
    $array[] = [
        "key" => (AccountType::cases()[$i])->name,
        "value"=> (AccountType::cases()[$i])->value
    ];
}

echo json_encode($array);
