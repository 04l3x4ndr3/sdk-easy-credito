<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Contract;

try {
    $contextContract = new Contract();
    $contract = new \O4l3x4ndr3\SdkEasyCredito\Types\Contract(
        htmlspecialchars($_REQUEST["checksum"]),
        htmlspecialchars($_REQUEST["contractFile"])
    );
    echo json_encode($contextContract->post($contract, htmlspecialchars($_REQUEST["proposalId"])));
} catch (GuzzleException|Exception $exception) {
    echo $exception;
}