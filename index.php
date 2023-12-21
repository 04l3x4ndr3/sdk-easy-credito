<?php
require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Contexts\FIPE;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Process;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Borrower;
use O4l3x4ndr3\SdkEasyCredito\Contexts\Contract;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\AccountType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\BusinessProfession;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\CreditStatus;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\DocumentType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmployeesCount;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmploymentSince;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Gender;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeSince;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityIssuer;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\MIMEType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Nationality;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Network;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Profession;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RealEstateType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RelationshipStatus;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\WorkingCapitalLoanObjectives;
use O4l3x4ndr3\SdkEasyCredito\Types\Address;
use O4l3x4ndr3\SdkEasyCredito\Types\Bank;
use O4l3x4ndr3\SdkEasyCredito\Types\Business;
use O4l3x4ndr3\SdkEasyCredito\Types\Client;
use O4l3x4ndr3\SdkEasyCredito\Types\Document;
use O4l3x4ndr3\SdkEasyCredito\Types\File;
use O4l3x4ndr3\SdkEasyCredito\Types\Product;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\Card;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\Loan;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\FinancingAuto;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\WorkingCapital;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\RefinancingAuto;
use O4l3x4ndr3\SdkEasyCredito\Types\Product\RefinancingHome;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;
use O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals\ProposalCard;
use O4l3x4ndr3\SdkEasyCredito\Types\ProposalVehicle;

$contextProcess = new Process();
$contextFIPE = new FIPE();
$contextContract = new Contract();
$contextBorrower = new Borrower();

try {
    # CRIAR CLIENTE SIMPLES
    $simpleSignup = new Client(
        null,
        "00000000001",
        "Arroz Feijão",
        "arroz@feijao.com",
        "0001-01-01",
        "62000000001",
        "29100100",
        true,
        false,
        true,
        true,
        true
    );
    # SALVE-O
    //$contextProcess->signup($simpleSignup, true);

    # CRIAR CLIENTE COMPLETO
    // Define o carro
    $signupVehicle = $contextFIPE->get()->vehicles[0];
    // Cria uma lista de produtos para proposta inicial
    $products = [
        new Product(null, ProductTypestring::DEBT),
        new Card(Network::ELO, 15),
        new WorkingCapital(
            60000,
            6,
            "52632931000106",
            BusinessProfession::PROCURADOR,
            EmployeesCount::DE_1_A_5,
            6000,
            WorkingCapitalLoanObjectives::EXPANSAO,
            "0001",
            AccountType::CONTA_CORRENTE_INDIVIDUAL,
            "0001",
            "0000000-1"
        ),
        new RefinancingHome(
            12000,
            12,
            RealEstateType::HOUSE,
            90000,
            8000
        ),
        new RefinancingAuto(
            5000,
            5,
            new \O4l3x4ndr3\SdkEasyCredito\Types\Vehicle(
                "Fiat", "Mobi", "038003-2", 28000, "2010"
            )
        ),
        new FinancingAuto(
            new RefinancingAuto(
                250000,
                7,
                new \O4l3x4ndr3\SdkEasyCredito\Types\Vehicle(
                    "Fiat", "Mobi", "038003-2", 28000, "2010"
                )
            ),
            70000,
            false
        ),
        new Loan(
            90000,
            9
        )
    ];
    $signup = new Client(
        null,
        "00000000002",
        "Carne Batata",
        "carne@batata.com",
        "0002-02-02",
        "62000000002",
        29100100,
        true,
        true,
        true,
        true,
        true,
        Education::POS_GRADUACAO,
        "0001",
        Occupation::ASSALARIADO,
        5500,
        [
            $products[0]->toArray(),
            $products[1]->toArray(),
            $products[2]->toArray(),
            $products[3]->toArray(),
            $products[4]->toArray(),
            $products[5]->toArray(),
            $products[6]->toArray()
        ]
    );
    # SALVE-O
    $contextProcess->signup($signup);
    $fakeId = "1k9fj2qsdbndm61v0pd29e62fc0d43e47578c4fb773d1746a31";

    # CRIAR UMA PROPOSTA E ENVIÁ-LA
    $personalAddress = new Address(
        "29120120",
        "Avenida Salada",
        2,
        "Ao lado do Sorvete",
        "geral",
        States::ES,
        "Vila Velha",
        HomeType::ALUGADA,
        HomeSince::MAIOR_2_ANOS
    );
    $proposalVehicle = new ProposalVehicle(
        "XXX0002"
    );
    $consumerUnit = new \O4l3x4ndr3\SdkEasyCredito\Types\ConsumerUnit(
        "000000000"
    );
    $identityDocument = new Document(
        IdentityType::RG,
        "0000002",
        IdentityIssuer::SSP,
        States::ES,
        "0002-02-22"
    );
    $businessAddress = new Address(
        "29120120",
        "Rodovia Refrigerante",
        2,
        "Perto da Latinha",
        "geral",
        States::ES,
        "Vila Velha",
        HomeType::FUNCIONAL,
        HomeSince::MAIOR_2_ANOS
    );
    $businessProfile = new Business(
        Occupation::EMPRESARIO,
        Profession::VENDEDOR,
        "Vinho",
        "62000000002",
        2000000,
        2,
        EmploymentSince::BETWEEN_FIVE_AND_TEN_YEARS,
        null,
        $businessAddress
    );
    $motherReference = new \O4l3x4ndr3\SdkEasyCredito\Types\Reference(
        "Arroz Integral",
        "62000000022"
    );
    $fatherReference = new \O4l3x4ndr3\SdkEasyCredito\Types\Reference(
        "Feijão Preto",
        "62000000222"
    );
    $references = [$motherReference->toArray(), $fatherReference->toArray()];
    $proposalProducts = [
        new Product(null, ProductTypestring::DEBT),
        new Card(Network::MASTERCARD, 2),
        new WorkingCapital(
            770,
            7,
            "52632931000106",
            BusinessProfession::SOCIO_DONO,
            EmployeesCount::MAIS_DE_100,
            2000000,
            WorkingCapitalLoanObjectives::EXPANSAO,
            "0002",
            AccountType::CONTA_POUPANCA_INDIVIDUAL,
            "0002",
            "0000000-2"
        ),
        new RefinancingHome(
            22000,
            2,
            RealEstateType::APARTMENT,
            330000,
            70000
        ),
        new RefinancingAuto(
            40000,
            4,
            new \O4l3x4ndr3\SdkEasyCredito\Types\Vehicle(
                "Fiat", "Mobi", "038003-2", 28000, "2010"
            )
        ),
        new FinancingAuto(
            new RefinancingAuto(
                100000,
                1,
                new \O4l3x4ndr3\SdkEasyCredito\Types\Vehicle(
                    "Fiat", "Mobi", "038003-2", 28000, "2010"
                )
            ),
            10000,
            false
        ),
        new Loan(
            9800,
            9
        )
    ];
    $personalBank = new Bank(
        "0002",
        AccountType::CONTA_POUPANCA_INDIVIDUAL,
        0002,
        "000000-2"
    );
    $createProposal = new \O4l3x4ndr3\SdkEasyCredito\Types\Proposal(
        "Arroz Integral",
        Gender::MASCULINO,
        Nationality::BRASILEIRO,
        States::SP,
        "São Paulo",
        Education::ENSINO_SUPERIOR_COMPLETO,
        RelationshipStatus::CASADO,
        "6232345678",
        $identityDocument,
        $proposalVehicle,
        $consumerUnit,
        $personalAddress,
        $businessProfile,
        $personalBank,
        $references,
        [
            $proposalProducts[0]->toArray(),
            $proposalProducts[1]->toArray(),
            $proposalProducts[2]->toArray(),
            $proposalProducts[3]->toArray(),
            $proposalProducts[4]->toArray(),
            $proposalProducts[5]->toArray(),
            $proposalProducts[6]->toArray(),
            $proposalProducts[7]->toArray()
        ]
    );
    # CRIAR PROPOSTA
    $contextProcess->proposal($createProposal, $fakeId);
    $callbackProposals = [
        new O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals\Proposals(
            ProductTypestring::LOAN,
            "20190805062216",
            "EMPRÉSTIMO PESSOAL",
            6215423,
            false,
            true,
            CreditStatus::PRE_PROCESSAMENTO,
            "url",
            date("c"),
            date("c"),
            50000,
            5,
            0.059,
            3490.77,
            1652.59988,
            51652.6,
            date("c"),
            1.052660058382551,
            date("c")
        ),
        new ProposalCard(
            "20190805062221",
            "Cartão de Crédito - Visa Platinum",
            3412351,
            false,
            false,
            CreditStatus::PRE_PROCESSAMENTO,
            "url",
            date("c"),
            date("c"),
            true,
            499.92,
            499.2,
            false,
            false
        ),
        new O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals\Proposals(
            ProductTypestring::REFINANCING_AUTO,
            "30190805062217",
            "REFINANCIAMENTO DE VEICULO",
            1354658,
            false,
            false,
            CreditStatus::PRE_PROCESSAMENTO,
            "url",
            date("c"),
            date("c"),
            50000,
            36,
            0.059,
            3490.77,
            1652.59988,
            51652.6,
            date("c"),
            1.052660058382551,
            date("c")
        ),
        new O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals\Proposals(
            ProductTypestring::REFINANCING_HOME,
            "50190805062219",
            "REFINANCIAMENTO DE CASA",
            532234,
            false,
            false,
            CreditStatus::PRE_PROCESSAMENTO,
            "url",
            date("c"),
            date("c"),
            150000,
            36,
            0.059,
            3490.77,
            1652.59988,
            51652.6,
            date("c"),
            1.052660058382551,
            date("c")
        ),
        new O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals\Proposals(
            ProductTypestring::FINANCING_AUTO,
            "30190888062217",
            "FINANCIAMENTO DE VEICULOS",
            1354658,
            false,
            false,
            CreditStatus::PRE_PROCESSAMENTO,
            "url",
            date("c"),
            date("c"),
            50000,
            36,
            0.059,
            3490.77,
            1652.59988,
            51652.6,
            date("c"),
            1.052660058382551,
            date("c")
        ),
        new O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals\Proposals(
            ProductTypestring::LOAN,
            "50190805063355",
            "EMPRÉSTIMO PESSOAL",
            22314124,
            false,
            false,
            CreditStatus::PRE_PROCESSAMENTO,
            "url",
            date("c"),
            date("c"),
            50000,
            36,
            0.059,
            3490.77,
            1652.59988,
            51652.6,
            date("c"),
            1.052660058382551,
            date("c")
        ),
        new O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals\Proposals(
            ProductTypestring::DEBT,
            "50190805063355",
            "NEGOCIAÇÃO DE DÍVIDAS",
            22314124,
            false,
            false,
            CreditStatus::PRE_PROCESSAMENTO,
            "url",
            date("c"),
            date("c"),
            50000,
            36,
            0.059,
            3490.77,
            1652.59988,
            51652.6,
            date("c"),
            1.052660058382551,
            date("c")
        )
    ];
    $fakeCustomerServiceNumber = "20201104135023860005735";

    # ENVIAR DOCUMENTOS PENDENTES
    $fileSelf = new File(
        DocumentType::SELF,
        MIMEType::PNG,
        "selfie.png",
        "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"
    );
    $fileAddress = new File(
        DocumentType::ADDRESS_PROOF,
        MIMEType::PDF,
        "comprovante.pdf",
        "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"
    );
    $fileIFront = new File(
        DocumentType::IDENTITY_FRONT,
        MIMEType::JPEG,
        "frente.jpeg",
        "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"
    );
    $fileIBack = new File(
        DocumentType::IDENTITY_BACK,
        MIMEType::JPEG,
        "atras.jpeg",
        "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"
    );
    $fileIncome= new File(
        DocumentType::INCOME_PROOF,
        MIMEType::PDF,
        "renda.pdf",
        "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"
    );
    $contextProcess->document($fileSelf, $fakeId);
    $contextProcess->document($fileAddress, $fakeId);
    $contextProcess->document($fileIFront, $fakeId);
    $contextProcess->document($fileIBack, $fakeId);
    $contextProcess->document($fileIncome, $fakeId);

    # APROVADO!
    $callbackContract = $contextContract->get($fakeCustomerServiceNumber);

    # ASSINADO
    $acceptedContract = new \O4l3x4ndr3\SdkEasyCredito\Types\Contract(
        $callbackContract["checksum"],
        $callbackContract["contract"]
    );
    $contextContract->post($acceptedContract, $fakeCustomerServiceNumber);

    # CANCELAR PROPOSTA
    $contextProcess->expire_proposals($fakeId);

    # INFO POR CPF
    $data = $contextBorrower->get("148.227.407-81");
} catch (GuzzleException|Exception $exception) {
    echo json_encode($exception);
}