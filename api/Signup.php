<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;
use O4l3x4ndr3\SdkEasyCredito\Types\Client;

try {
    $contextProcess = new Process();
    $simpleSignup = new Client(
        null,
        preg_replace("/\D/", "", htmlspecialchars($_REQUEST["taxNumber"])),
        htmlspecialchars($_REQUEST["name"]),
        htmlspecialchars($_REQUEST["email"]),
        htmlspecialchars($_REQUEST["birthdate"]),
        htmlspecialchars($_REQUEST["phone"]),
        htmlspecialchars($_REQUEST["zipCode"])
    );
    echo json_encode($contextProcess->signup($simpleSignup, true));
} catch (GuzzleException|Exception $exception) {
    echo json_encode(["type" => "error", "message" => $exception->getMessage()]);
}