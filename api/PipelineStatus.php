<?php

require_once '../vendor/autoload.php';
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;

$contextProcess = new Process();
try {
    $response = ($contextProcess->status(htmlspecialchars($_REQUEST["id"])));
    $status = "Cadastro em análise";
    switch ($response->status) {
        case "SIGNUP_COMPLETED":
            echo json_encode(["status" => "Cadastro Realizado com Sucesso"]);
            break;
        case "SIGNUP_DENIED":
            echo json_encode(["status" => "Cadastro recusado"]);
            break;
        case "PROPOSAL_ANALISIS":
            echo json_encode(["status" => "Análise das propostas em andamento"]);
            break;
        case "PROPOSAL_CREATED":
            echo json_encode(["status" => "Proposta em andamento"]);
            break;
        case "PROPOSAL_DENIED ":
            echo json_encode(["status" => "Proposta recusada"]);
            break;
    }
} catch (GuzzleException|Exception $e) {
    echo json_encode($e);
}