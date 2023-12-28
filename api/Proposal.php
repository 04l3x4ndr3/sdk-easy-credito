<?php
require_once '../vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\AccountType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmploymentSince;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Gender;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeSince;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityIssuer;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Nationality;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Profession;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RelationshipStatus;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States;
use O4l3x4ndr3\SdkEasyCredito\Types\Address;
use O4l3x4ndr3\SdkEasyCredito\Types\Bank;
use O4l3x4ndr3\SdkEasyCredito\Types\Business;
use O4l3x4ndr3\SdkEasyCredito\Types\ConsumerUnit;
use O4l3x4ndr3\SdkEasyCredito\Types\Document;
use O4l3x4ndr3\SdkEasyCredito\Types\Proposal;
use O4l3x4ndr3\SdkEasyCredito\Types\ProposalVehicle;

try {
    $contextProcess = new Process();
    $proposal = new Proposal(
        htmlspecialchars($_REQUEST["mother"]),
        htmlspecialchars($_REQUEST["gender"]),
        htmlspecialchars($_REQUEST["nationality"]),
        htmlspecialchars($_REQUEST["hometownState"]),
        htmlspecialchars($_REQUEST["hometown"]),
        htmlspecialchars($_REQUEST["education"]),
        htmlspecialchars($_REQUEST["relationshipStatus"]),
        htmlspecialchars($_REQUEST["phoneLandline"]),
        new Document(
            "RG",
            htmlspecialchars($_REQUEST["identity"]["number"]),
            htmlspecialchars($_REQUEST["identity"]["issuer"]),
            htmlspecialchars($_REQUEST["identity"]["state"]),
            htmlspecialchars($_REQUEST["identity"]["issuingDate"]) ?? ""
        ),
        new ProposalVehicle(
            htmlspecialchars($_REQUEST["vehicle"]["licensePlate"])
        ),
        new ConsumerUnit(
            htmlspecialchars($_REQUEST["consumerUnit"]["number"])
        ),
        new Address(
            htmlspecialchars($_REQUEST["address"]["zipCode"]),
            htmlspecialchars($_REQUEST["address"]["address"]),
            htmlspecialchars($_REQUEST["address"]["number"]),
            htmlspecialchars($_REQUEST["address"]["complement"]),
            htmlspecialchars($_REQUEST["address"]["district"]),
            htmlspecialchars($_REQUEST["address"]["state"]),
            htmlspecialchars($_REQUEST["address"]["city"]),
            htmlspecialchars($_REQUEST["address"]["homeType"]),
            htmlspecialchars($_REQUEST["address"]["homeSince"])
        ),
        new Business(
            htmlspecialchars($_REQUEST["business"]["occupation"]),
            htmlspecialchars($_REQUEST["business"]["profession"]),
            htmlspecialchars($_REQUEST["business"]["companyName"]),
            htmlspecialchars($_REQUEST["business"]["phone"]),
            htmlspecialchars($_REQUEST["business"]["income"]),
            htmlspecialchars($_REQUEST["business"]["payday"]),
            htmlspecialchars($_REQUEST["business"]["employmentSince"]),
            htmlspecialchars(intval($_REQUEST["business"]["benefitNumber"]) ?? ""),
            new Address(
                htmlspecialchars($_REQUEST["business"]["zipCode"]),
                htmlspecialchars($_REQUEST["business"]["address"]),
                htmlspecialchars($_REQUEST["business"]["number"]),
                htmlspecialchars($_REQUEST["business"]["complement"]),
                htmlspecialchars($_REQUEST["business"]["district"]),
                htmlspecialchars($_REQUEST["business"]["state"]),
                htmlspecialchars($_REQUEST["business"]["city"]),
                null,
                null
            )
        ),
        new Bank(
            htmlspecialchars($_REQUEST["bank"]["bank"]),
            htmlspecialchars($_REQUEST["bank"]["type"]),
            htmlspecialchars($_REQUEST["bank"]["agency"]),
            htmlspecialchars($_REQUEST["bank"]["account"])
        ),
        $_REQUEST["reference"],
        $_REQUEST["products"]
    );
    $response = $contextProcess->proposal($proposal, htmlspecialchars($_REQUEST["id"]));
} catch (GuzzleException|Exception $exception) {
    $response = $exception->getMessage();
} finally {
    echo json_encode($response);
}