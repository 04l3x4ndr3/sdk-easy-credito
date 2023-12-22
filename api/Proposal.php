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
        Gender::from(htmlspecialchars($_REQUEST["gender"])),
        Nationality::from(htmlspecialchars($_REQUEST["nationality"])),
        States::from(htmlspecialchars($_REQUEST["hometownState"])),
        htmlspecialchars($_REQUEST["hometown"]),
        Education::from($_REQUEST["education"]),
        RelationshipStatus::from($_REQUEST["relationshipStatus"]),
        htmlspecialchars($_REQUEST["phoneLandline"]),
        new Document(
            IdentityType::RG,
            htmlspecialchars($_REQUEST["identity"]["number"]),
            IdentityIssuer::from(htmlspecialchars($_REQUEST["identity"]["issuer"])),
            States::from(htmlspecialchars($_REQUEST["identity"]["state"])),
            htmlspecialchars($_REQUEST["identity"]["issuingDate"])
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
            States::from(htmlspecialchars($_REQUEST["address"]["state"])),
            htmlspecialchars($_REQUEST["address"]["city"]),
            HomeType::from(htmlspecialchars($_REQUEST["address"]["homeType"])),
            HomeSince::from($_REQUEST["address"]["homeSince"])
        ),
        new Business(
            Occupation::from(htmlspecialchars($_REQUEST["business"]["occupation"])),
            Profession::from(htmlspecialchars($_REQUEST["business"]["profession"])),
            htmlspecialchars($_REQUEST["business"]["companyName"]),
            htmlspecialchars($_REQUEST["business"]["phone"]),
            htmlspecialchars($_REQUEST["business"]["income"]),
            htmlspecialchars($_REQUEST["business"]["payday"]),
            EmploymentSince::from($_REQUEST["business"]["employmentSince"]),
            htmlspecialchars(intval($_REQUEST["business"]["benefitNumber"]) ?? ""),
            new Address(
                htmlspecialchars($_REQUEST["business"]["zipCode"]),
                htmlspecialchars($_REQUEST["business"]["address"]),
                htmlspecialchars($_REQUEST["business"]["number"]),
                htmlspecialchars($_REQUEST["business"]["complement"]),
                htmlspecialchars($_REQUEST["business"]["district"]),
                States::from(htmlspecialchars($_REQUEST["business"]["state"])),
                htmlspecialchars($_REQUEST["business"]["city"]),
                null,
                null
            )
        ),
        new Bank(
            htmlspecialchars($_REQUEST["bank"]["bank"]),
            AccountType::from($_REQUEST["bank"]["type"]),
            htmlspecialchars($_REQUEST["bank"]["agency"]),
            htmlspecialchars($_REQUEST["bank"]["account"])
        ),
        $_REQUEST["reference"],
        $_REQUEST["products"]
    );
    $response = json_encode($contextProcess->proposal($proposal, htmlspecialchars($_REQUEST["id"])));
} catch (GuzzleException|Exception $exception) {
    $response = $exception;
} finally {
    echo json_encode($response);
}