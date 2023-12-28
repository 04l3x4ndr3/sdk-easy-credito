<?php

require_once '../vendor/autoload.php';
use O4l3x4ndr3\SdkEasyCredito\Contexts\Contract;

try {
    $contextContract = new Contract();
    $fakeContract = [
        "customerServiceNumber" => "20231227231301289000760",
        "contracts" => [
            "checksum" => "8de41a016d5270686c6cf3b5bf25ac5cc523db39f9573c5f2232b9ee0ec7fc11",
            "contract" => base64_encode(file_get_contents("./files/teste_img_mulher.png"))
        ]
    ];
    //$response = $contextContract->get(htmlspecialchars($_REQUEST["proposalId"])) ?? $fakeContract;
    $response = $fakeContract;
} catch (Exception $exception) {
    $response = $exception->getMessage();
} finally {
    echo json_encode($response);
}