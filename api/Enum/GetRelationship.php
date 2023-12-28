<?php

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RelationshipStatus;

require_once '../../vendor/autoload.php';

$array = [];

for($i = 0; $i < count(RelationshipStatus::cases()); $i++) {
    $array[] = [
        "key" => (RelationshipStatus::cases()[$i])->name,
        "value"=> (RelationshipStatus::cases()[$i])->value
    ];
}

echo json_encode($array);
