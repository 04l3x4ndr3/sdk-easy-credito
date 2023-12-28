<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation;
use O4l3x4ndr3\SdkEasyCredito\Types\Client;
use O4l3x4ndr3\SdkEasyCredito\Types\LogData;

try {
    $contextProcess = new Process();
    $logData = new LogData();
    $simpleSignup = new Client(
        null,
        preg_replace("/\D/", "", htmlspecialchars($_REQUEST["taxNumber"])),
        htmlspecialchars($_REQUEST["name"]),
        htmlspecialchars($_REQUEST["email"]),
        htmlspecialchars($_REQUEST["birthdate"]),
        htmlspecialchars($_REQUEST["phone"]),
        htmlspecialchars($_REQUEST["zipCode"]),
        htmlspecialchars((bool)$_REQUEST["hasCreditCard"]),
        htmlspecialchars((bool)$_REQUEST["hasRestriction"]),
        htmlspecialchars((bool)$_REQUEST["hasOwnHouse"]),
        htmlspecialchars((bool)$_REQUEST["hasVehicle"]),
        htmlspecialchars((bool)$_REQUEST["hasAndroid"]),
        htmlspecialchars($_REQUEST["education"] ?? null),
        htmlspecialchars($_REQUEST["bank"] ?? null),
        htmlspecialchars($_REQUEST["occupation"] ?? null),
        (float) htmlspecialchars($_REQUEST["income"] ?? null),
        $_REQUEST["products"] ?? [],
        logData: $logData
    );

    if(htmlspecialchars((bool)$_REQUEST["simpleSingup"] ?? false)) {
        $response = $contextProcess->signup($simpleSignup, true);
    } else {
        $response = $contextProcess->signup($simpleSignup);
    }
    echo json_encode($response);
} catch (GuzzleException|Exception $exception) {
    echo $exception;
}