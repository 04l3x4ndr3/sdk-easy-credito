<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation;
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
        htmlspecialchars($_REQUEST["zipCode"]),
        htmlspecialchars((bool)$_REQUEST["hasCreditCard"]),
        htmlspecialchars((bool)$_REQUEST["hasRestriction"]),
        htmlspecialchars((bool)$_REQUEST["hasOwnHouse"]),
        htmlspecialchars((bool)$_REQUEST["hasVehicle"]),
        htmlspecialchars((bool)$_REQUEST["hasAndroid"])
    );
    if(isset($_REQUEST["education"])) {
        $simpleSignup->setEducation(Education::from(htmlspecialchars($_REQUEST["education"])));
    }
    if(isset($_REQUEST["bank"])) {
        $simpleSignup->setBanks(htmlspecialchars($_REQUEST["bank"]));
    }
    if(isset($_REQUEST["occupation"])) {
        $simpleSignup->setOccupation(Occupation::from(htmlspecialchars($_REQUEST["occupation"])));
    }
    if(isset($_REQUEST["income"])) {
        $simpleSignup->setIncome((float) htmlspecialchars($_REQUEST["income"]));
    }
    if(isset($_REQUEST["products"])) {
        $simpleSignup->setProducts(createProducts($_REQUEST["products"]));
    }

    if(htmlspecialchars((bool)$_REQUEST["simpleSingup"])) {
        $response = $contextProcess->signup($simpleSignup, true);
    } else {
        $response = $contextProcess->signup($simpleSignup);
    }
    echo json_encode($response);
} catch (GuzzleException|Exception $exception) {
    echo $exception;
}
function createProducts($payload) : array {
    $productsArray = [];

    foreach ($payload as $singleProduct) {
        $product = null;
        $productsArray[] = $product;
    }

    return $productsArray;
}