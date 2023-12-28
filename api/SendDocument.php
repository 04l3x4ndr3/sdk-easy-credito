<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\DocumentType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\MIMEType;
use O4l3x4ndr3\SdkEasyCredito\Types\File;

try {
    $contextProcess = new Process();

    $documentFile = new File(
        $_REQUEST["type"],
        $_FILES['file']["type"],
        basename($_FILES['file']['name']),
        base64_encode(file_get_contents($_FILES['file']["tmp_name"]))
    );
    echo json_encode($contextProcess->document($documentFile, htmlspecialchars($_REQUEST["id"])));
} catch (GuzzleException|Exception $exception) {
    echo $exception->getMessage();
}