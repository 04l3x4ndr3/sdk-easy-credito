<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Contract;

try {
    $contextContract = new Contract();

    echo json_encode($contextContract->get(htmlspecialchars($_REQUEST["proposalId"])));
} catch (GuzzleException|Exception $exception) {
    echo $exception;
}