<?php
require_once '../../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\FIPE;

try {
    $contextFIPE = new FIPE();
    $response = $contextFIPE->get();
    echo json_encode($response);
} catch (GuzzleException|Exception $exception) {
    echo $exception;
}