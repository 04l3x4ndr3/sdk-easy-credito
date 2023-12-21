<?php
require_once __DIR__ . '/vendor/autoload.php';

use O4l3x4ndr3\SdkEasyCredito\Contexts\Borrower;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Contract;
use O4l3x4ndr3\SdkEasyCredito\Contexts\FIPE;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\Card;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\Loan;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\FinancingAuto;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\WorkingCapital;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\RefinancingAuto;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\RefinancingHome;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;

$p = new Process();
$f = new FIPE();
$c = new Contract();
$b = new Borrower();

$simpleclient = new \O4l3x4ndr3\SdkEasyCredito\Types\Client(
    0,
    14822740781,
    "Jonas Santos",
    "a@a.com",
    "2000-09-17",
    "62987654321",
    29120120,
    false,
    false,
    false,
    false,
    true
);

//$p->signup($simpleclient, true);
$car = $f->get()->vehicles[0];
//echo json_encode($car);

// Para signup com propostas iniciais
$product = new \O4l3x4ndr3\SdkEasyCredito\Types\Product(null,ProductTypestring::DEBT);

switch ($product->getTypestring()) {
    case ProductTypestring::CARD:
        $product = new Card(
            $product->getTypestring(),
            \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Network::ELO,
            15
        );
        break;
    case ProductTypestring::FINANCING_AUTO:
        $product = new FinancingAuto(
            new RefinancingAuto(
                $product->getTypestring(),
                1200,
                12,
                $car
            ),
            1200,
            true
        );
        break;
    case ProductTypestring::LOAN:
        $product = new Loan(
            $product->getTypestring(),
            1200,
            12
        );
        break;
    case ProductTypestring::REFINANCING_AUTO:
        $product = new RefinancingAuto(
            $product->getTypestring(),
            1200,
            12,
            $car
        );
        break;
    case ProductTypestring::REFINANCING_HOME:
        $product = new RefinancingHome(
            $product->getTypestring(),
            1200,
            12,
            \O4l3x4ndr3\SdkEasyCredito\Helpers\RealEstateType::APARTMENT,
            12000,
            50000
        );
        break;
    case ProductTypestring::WORKING_CAPITAL:
        $product = new WorkingCapital(
            $product->getTypestring(),
            1200,
            12,
            "21632931000106",
            \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\BusinessProfession::ADMINISTRADOR_DIRETOR,
            \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmployeesCount::DE_1_A_5,
            12000,
            \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\WorkingCapitalLoanObjectives::CAPITAL_DE_GIRO,
            001,
            \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\AccountType::CONTA_CORRENTE_INDIVIDUAL,
            0001,
            0001
        );
        break;
    case ProductTypestring::DEBT:
        break;
    default:
        throw new Exception("Ainda não implementado");
        break;
}

$client = new \O4l3x4ndr3\SdkEasyCredito\Types\Client(
    0,
    14822740781,
    "Jonas Santos",
    "a@a.com",
    "2000-09-17",
    "62987654321",
    29120120,
    false,
    false,
    false,
    false,
    true,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education::ENSINO_SUPERIOR_INCOMPLETO,
    001,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation::AUTONOMO,
    2000,
    [
        $product
    ]
);

//$p->signup($client);
$address = new \O4l3x4ndr3\SdkEasyCredito\Types\Address(
    29120120,
    "Avenida Batata",
    0,
    "Ao lado da Cenoura",
    "Geral",
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States::ES,
    "Vila Velha",
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeType::ALUGADA,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeSince::MAIOR_2_ANOS
);
$vehicle = new \O4l3x4ndr3\SdkEasyCredito\Types\ProposalVehicle(
    "XXX0000"
);
$identity = new \O4l3x4ndr3\SdkEasyCredito\Types\Document(
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityType::RG,
    "0000001",
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityIssuer::SSP,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States::ES,
    "2000-01-01"
);
$business = new \O4l3x4ndr3\SdkEasyCredito\Types\Business(
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation::AUTONOMO,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Profession::VENDEDOR,
    "Batata",
    "62987654321",
    12000,
    15,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmploymentSince::BETWEEN_FIVE_AND_TEN_YEARS,
    null,
    $address
);
$reference = new \O4l3x4ndr3\SdkEasyCredito\Types\Reference(
    "Arroz Feijão",
    "62987654321"
);
unset($product);
$product = new \O4l3x4ndr3\SdkEasyCredito\Types\Product(
    null,
    ProductTypestring::DEBT
);
$proposal = new \O4l3x4ndr3\SdkEasyCredito\Types\Proposal(
    "MAMAE QUERIDA",
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Gender::MASCULINO,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Nationality::BRASILEIRO,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States::BA,
    "Belmonte",
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education::ENSINO_SUPERIOR_INCOMPLETO,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RelationshipStatus::SOLTEIRO,
    "6232345678",
    $identity,
    $vehicle,
    new \O4l3x4ndr3\SdkEasyCredito\Types\ConsumerUnit(
        000000000
    ),
    $address,
    $business,
    new \O4l3x4ndr3\SdkEasyCredito\Types\Bank(
        "001",
        \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\AccountType::CONTA_CORRENTE_CONJUNTA,
        0001,
        "564789-1"
    ),
    [
        $reference->toArray()
    ],
    [
        $product->toArray()
    ]
);

$documentFile = new \O4l3x4ndr3\SdkEasyCredito\Types\File(
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\DocumentType::SELF,
    \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\MIMEType::PNG,
    "foto_linda.png",
    "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"
);
$contract = new \O4l3x4ndr3\SdkEasyCredito\Types\Contract(
    "8de41a016d5270686c6cf3b5bf25ac5cc523db39f9573c5f2232b9ee0ec7fc11",
    "PCFET0NUWVBFIGh0bWw+CjxodG1sIGxhbmc9InB0LWJyIj4KPGhlYWQ+CiAgPG1ldGE ...."
);
//echo json_encode($documentFile);
try {
    //$p->proposal($proposal, "1k9fj2p7evcf42r6qpd8cf59eb27d4745f69d7f0669ccff6867");

    // Proposta resposta
    $proposed = new \O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals\Proposals(
        $product->getTypestring(),
        20190805062216,
        "Negociação de Dívidas",
        22314124,
        false,
        false,
        \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\CreditStatus::CONTRATADO,
        "url",
        date("c"),
        date("c"),
        12,
        14,
        1.01,
        59000,
        date("c"),
        1.00009,
        date("c")
    );
    //$p->document($documentFile, $proposed->getCustomerServiceNumber());
    $c->get("20201104135023860005735");
    //$c->post($contract,"20201104135023860005735");
    //echo json_encode($p->status("1k9fj2qsdbndm61v0pd29e62fc0d43e47578c4fb773d1746a31"));
    //echo json_encode($p->expire_proposals("1k9fj2qsdbndm61v0pd29e62fc0d43e47578c4fb773d1746a31"));
    //echo json_encode($b->get("148.227.407-81"));
} catch (Exception $e) {
    echo $e->getCode();
}