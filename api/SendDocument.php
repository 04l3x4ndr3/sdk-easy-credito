<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\DocumentType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\MIMEType;
use O4l3x4ndr3\SdkEasyCredito\Types\File;

try {
    $contextProcess = new Process();
    $updir = "/files";
    $upfile = $updir . basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['name'], $upfile);

    $documentFile = new File(
        DocumentType::from($_REQUEST["type"]),
        MIMEType::from($_FILES['file']["type"]),
        basename($_FILES['file']['name']),
        base64_encode($_FILES['file']["name"])
    );
    echo json_encode($contextProcess->document($documentFile, htmlspecialchars($_REQUEST["id"])));
} catch (GuzzleException|Exception $exception) {
    echo $exception;
}