<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Contract;
use O4l3x4ndr3\SdkEasyCredito\Types\LogData;

try {
    $contextContract = new Contract();

    $logData = new LogData();
    $contract = new \O4l3x4ndr3\SdkEasyCredito\Types\Contract(
        htmlspecialchars($_REQUEST["checksum"]),
        base64_encode(file_get_contents($_FILES["file"]["tmp_name"])),
        $logData
    );
    $response = $contextContract->post($contract, htmlspecialchars($_REQUEST["proposalId"]));
} catch (GuzzleException|Exception $exception) {
    echo $response = $exception;
} finally {
    echo json_encode($response);
}