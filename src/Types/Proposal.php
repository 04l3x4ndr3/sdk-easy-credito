<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

use Exception;
use O4l3x4ndr3\SdkEasyCredito\Helpers\EasyCreditoValidate;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\AccountType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\BusinessProfession;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmployeesCount;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Gender;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeSince;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityIssuer;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\LoanObjectives;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Nationality;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Network;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Profession;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RealEstateType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RelationshipStatus;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States;

/**
 * Modelos das propostas ENVIADAS pela Tok e RECEBIDAS pela EasyCrédito
 */
class Proposal implements EasyCreditoValidate
{
    protected string $mother;
    protected string $gender;
    protected string $nationality;
    protected string $hometownState;
    protected string $hometown;
    protected string $education;
    protected string $relationshipStatus;
    protected string $phoneLandline;
    protected ?Document $identity;
    protected ?ProposalVehicle $vehicle;
    protected ?ConsumerUnit $consumerUnit;
    protected ?Address $address;
    protected ?Business $business;
    protected ?Bank $bank;
    protected array $reference;
    protected array $products;

    /**
     * @param string|null $mother
     * @param string|null $gender
     * @param string|null $nationality
     * @param string|null $hometownState
     * @param string|null $hometown
     * @param string|null $education
     * @param string|null $relationshipStatus
     * @param string|null $phoneLandline
     * @param Document|null $identity
     * @param ProposalVehicle|null $vehicle
     * @param ConsumerUnit|null $consumerUnit
     * @param Address|null $address
     * @param Business|null $business
     * @param Bank|null $bank
     * @param array|null $reference
     * @param array|null $products
     */
    public function __construct(
        ?string $mother,
        ?string $gender,
        ?string $nationality,
        ?string $hometownState,
        ?string $hometown,
        ?string $education,
        ?string $relationshipStatus,
        ?string $phoneLandline,
        ?Document $identity,
        ?ProposalVehicle $vehicle,
        ?ConsumerUnit $consumerUnit,
        ?Address $address,
        ?Business $business,
        ?Bank $bank,
        ?array $reference,
        ?array $products
    ) {
        $this->mother = $mother;
        $this->gender = $gender;
        $this->nationality = $nationality;
        $this->hometownState = $hometownState;
        $this->hometown = $hometown;
        $this->education = $education;
        $this->relationshipStatus = $relationshipStatus;
        $this->phoneLandline = $phoneLandline;
        $this->identity = $identity;
        $this->vehicle = $vehicle;
        $this->consumerUnit = $consumerUnit;
        $this->address = $address;
        $this->business = $business;
        $this->bank = $bank;
        $this->reference = $reference;
        $this->products = $products;
    }

    /**
     * @return string
     */
    public function getMother(): string
    {
        return $this->mother;
    }

    /**
     * @param string $mother
     * @return Proposal
     */
    public function setMother(string $mother): Proposal
    {
        $this->mother = $mother;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return Proposal
     */
    public function setGender(string $gender): Proposal
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     * @return Proposal
     */
    public function setNationality(string $nationality): Proposal
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * @return string
     */
    public function getHometownState(): string
    {
        return $this->hometownState;
    }

    /**
     * @param string $hometownState
     * @return Proposal
     */
    public function setHometownState(string $hometownState): Proposal
    {
        $this->hometownState = $hometownState;
        return $this;
    }

    /**
     * @return string
     */
    public function getHometown(): string
    {
        return $this->hometown;
    }

    /**
     * @param string $hometown
     * @return Proposal
     */
    public function setHometown(string $hometown): Proposal
    {
        $this->hometown = $hometown;
        return $this;
    }

    /**
     * @return string
     */
    public function getEducation(): string
    {
        return $this->education;
    }

    /**
     * @param string $education
     * @return Proposal
     */
    public function setEducation(string $education): Proposal
    {
        $this->education = $education;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelationshipStatus(): string
    {
        return $this->relationshipStatus;
    }

    /**
     * @param string $relationshipStatus
     * @return Proposal
     */
    public function setRelationshipStatus(string $relationshipStatus): Proposal
    {
        $this->relationshipStatus = $relationshipStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneLandline(): string
    {
        return $this->phoneLandline;
    }

    /**
     * @param string $phoneLandline
     * @return Proposal
     */
    public function setPhoneLandline(string $phoneLandline): Proposal
    {
        $this->phoneLandline = $phoneLandline;
        return $this;
    }

    /**
     * @return ProposalVehicle
     */
    public function getVehicle(): ProposalVehicle
    {
        return $this->vehicle;
    }

    /**
     * @param ProposalVehicle $vehicle
     * @return Proposal
     */
    public function setVehicle(ProposalVehicle $vehicle): Proposal
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * @return ConsumerUnit
     */
    public function getConsumerUnit(): object
    {
        return $this->consumerUnit;
    }

    /**
     * @param ConsumerUnit $consumerUnit
     * @return Proposal
     */
    public function setConsumerUnit(ConsumerUnit $consumerUnit): Proposal
    {
        $this->consumerUnit = $consumerUnit;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return Proposal
     */
    public function setAddress(Address $address): Proposal
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Business
     */
    public function getBusiness(): object
    {
        return $this->business;
    }

    /**
     * @param Business $business
     * @return Proposal
     */
    public function setBusiness(Business $business): Proposal
    {
        $this->business = $business;
        return $this;
    }

    /**
     * @return Bank
     */
    public function getBank(): Bank
    {
        return $this->bank;
    }

    /**
     * @param Bank $bank
     * @return Proposal
     */
    public function setBank(Bank $bank): Proposal
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return array
     */
    public function getReference(): array
    {
        return $this->reference;
    }

    /**
     * @param array $reference
     * @return Proposal
     */
    public function setReference(array $reference): Proposal
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     * @return Proposal
     */
    public function setProducts(array $products): Proposal
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @throws Exception
     */
    public function validate(): bool
    {
        if(count(explode(" ", $this->mother)) < 2) {
            throw new Exception("O Nome Mãe deve possuir ao menos nome e sobrenome, separados por espaço", 400);
        }
        if(!in_array($this->gender, Gender::cases())) {
            throw new Exception("O Gênero (sexo) deve ser MASCULINO ou FEMININO", 400);
        }
        if(!in_array($this->nationality, Nationality::cases())) {
            throw new Exception("A Nacionalidade deve ser BRASILEIRO ou ESTRANGEIRO", 400);
        }
        if(!in_array($this->hometownState, States::cases())) {
            throw new Exception("O Estado Natal deve ser uma sigla válida, ex.: ES, BA, MG...", 400);
        }
        if(!empty($this->hometown)) {
            throw new Exception("A Cidade Natal é obrigatória", 400);
        }
        if(!in_array($this->education, Education::cases())) {
            throw new Exception("Escolaridade incorreta", 400);
        }
        if(!in_array($this->relationshipStatus, RelationshipStatus::cases())) {
            throw new Exception("Estado Civil incorreto", 400);
        }
        if(isset($this->phoneLandline) && strlen($this->phoneLandline) != 10) {
            throw new Exception("O Telefone Fixo deve possuir 10 dígitos", 400);
        }
        if(!empty($this->identity->getNumber())) {
            throw new Exception("O Número de Identidade não pode ser vazio", 400);
        }
        if(!in_array($this->identity->getIssuer(), IdentityIssuer::cases())) {
            throw new Exception("Emissor de Identidade Inválido", 400);
        }
        if(!in_array($this->identity->getState(), States::cases())) {
            throw new Exception("O Estado Emissor da Identidade deve ser uma sigla válida, ex.: ES, BA, MG...", 400);
        }
        $dateTime = \DateTime::createFromFormat("Y-m-d", $this->identity->getIssuingDate());
        if(!($dateTime && $dateTime->format("Y-m-d") === $this->identity->getIssuingDate())) {
            throw new Exception("A Data de Emissão da Identidade deve seguir o formato Y-m-d", 400);
        }
        if(strlen($this->address->getZipCode()) !== 8) {
            throw new Exception("CEP inválido", 400);
        }
        if(empty($this->address->getAddress())) {
            throw new Exception("O Endereço não pode ser vazio", 400);
        }
        if(empty($this->address->getNumber())) {
            throw new Exception("O Endereço não pode ser vazio", 400);
        }
        if(empty($this->address->getDistrict())) {
            throw new Exception("O Endereço não pode ser vazio", 400);
        }
        if(!in_array($this->address->getState(), States::cases())) {
            throw new Exception("O Estado de Moradia deve ser uma sigla válida, ex.: ES, BA, MG...", 400);
        }
        if(empty($this->address->getCity())) {
            throw new Exception("O Endereço não pode ser vazio", 400);
        }
        if(!in_array($this->address->getHomeType(), HomeType::cases())) {
            throw new Exception("Tipo de Residência incorreto", 400);
        }
        if(!in_array($this->address->getHomeSince(), HomeSince::cases())) {
            throw new Exception("Tempo de Moradia inválido", 400);
        }
        if(isset($this->vehicle) && strlen($this->vehicle->getLicensePlate()) !== 7) {
            throw new Exception("A Placa do veículo é inválido", 400);
        }
        if(!in_array($this->business->getOccupation(), Occupation::cases())) {
            throw new Exception("Ocupação inválida", 400);
        }
        if(!in_array($this->business->getProfession(), Profession::cases())) {
            throw new Exception("Profissão inválida", 400);
        }
        if($this->business->getIncome() < 1.039 || $this->business->getIncome() > 50000) {
            throw new Exception("A Renda Mensal deve ser entre 1.039 a 50000", 400);
        }
        if($this->business->getPayday() < 1 || $this->business->getPayday() > 31) {
            throw new Exception("O Dia do Pagamento deve ser entre 1 e 31", 400);
        }
        if(strlen($this->business->getAddress()->getZipCode()) !== 8) {
            throw new Exception("CEP Empresa inválido", 400);
        }
        if(!empty($this->business->getAddress()->getAddress())) {
            throw new Exception("O Endereço da Empresa não pode ser vazio", 400);
        }
        if(!empty($this->business->getAddress()->getNumber())) {
            throw new Exception("O Número da Empresa não pode ser vazio", 400);
        }
        if(!empty($this->business->getAddress()->getDistrict())) {
            throw new Exception("O Bairro da Empresa não pode ser vazio", 400);
        }
        if(!in_array($this->business->getAddress()->getState(), States::cases())) {
            throw new Exception("O Estado da Empresa deve ser uma sigla válida, ex.: ES, BA, MG...", 400);
        }
        if(!empty($this->business->getAddress()->getCity())) {
            throw new Exception("A Cidade da Empresa não pode ser vazio", 400);
        }
        if(!in_array($this->bank->getBank(), \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Bank::cases())) {
            throw new Exception("Código do Banco Inválido", 400);
        }
        if(!in_array($this->bank->getType(), AccountType::cases())) {
            throw new Exception("Tipo da Conta Inválido", 400);
        }
        if(!empty($this->bank->getAgency()) || strlen($this->bank->getAgency()) > 4) {
            throw new Exception("Número da Agência Inválido", 400);
        }
        if(!empty($this->bank->getAccount())) {
            throw new Exception("Número da Conta Inválido", 400);
        }
        if(isset($this->reference)) {
            foreach ($this->reference as $ref) {
                if(count(explode(" ", $ref->name)) < 2) {
                    throw new Exception("Nome do Contato de Referência Inválido", 400);
                }
                if(strlen($ref->phone) < 11) {
                    throw new Exception("Número de Telefone do Contato de Referência Inválido", 400);
                }
            }
        }
        if(isset($this->products)) {
            foreach ($this->products as $product) {
                if(isset($product->type) && !in_array($product->type, ProductTypestring::cases())) {
                    throw new Exception("Tipo do Produto Inválido", 400);
                }
                switch ($product->type) {
                    case "CARD":
                        if(!in_array($product->network, Network::cases())) {
                            throw new Exception("Bandeira do Cartão inválido", 400);
                        }
                        if($product->payday < 1 || $product->payday > 31) {
                            throw new Exception("Data do Pagamento do Cartão Inválido", 400);
                        }
                        break;
                    case "WORKING_CAPITAL":
                        if(strlen(preg_replace("/\D/", "", $product->cnpj)) !== 14) {
                            throw new Exception("O CNPJ da Empresa deve possuir 14 caracteres numéricos", 400);
                        }
                        if(!in_array($product->businessProfession, BusinessProfession::cases())) {
                            throw new Exception("Cargo na Empresa inválido", 400);
                        }
                        if(!in_array($product->employeesCount, EmployeesCount::cases())) {
                            throw new Exception("Número de Funcionários na Empresa inválido", 400);
                        }
                        if(!in_array($product->loanObjectives, LoanObjectives::cases())) {
                            throw new Exception("Objetivo do Empréstimo da Empresa inválido", 400);
                        }
                        if(!in_array($product->bank, \O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Bank::cases())) {
                            throw new Exception("Código do Banco da Empresa inválido", 400);
                        }
                        if(!in_array($product->accountType, AccountType::cases())) {
                            throw new Exception("Tipo de Conta da Empresa inválido", 400);
                        }
                        if(strlen($product->agency) > 4) {
                            throw new Exception("Número da Agência Inválido", 400);
                        }
                        if(empty($product->account)) {
                            throw new Exception("O Número da Conta não pode ser vazio", 400);
                        }
                        break;
                    case "REFINANCING_AUTO" || "FINANCING_AUTO":
                        if(empty($product->value)) {
                            throw new Exception("O Valor do Refinanciamento não pode ser vazio", 400);
                        }
                        if(empty($product->vehicleBrand)) {
                            throw new Exception("Marca do Veículo inválida", 400);
                        }
                        if(empty($product->vehicleModel)) {
                            throw new Exception("Modelo do Veículo inválid0", 400);
                        }
                        if(empty($product->installments)) {
                            throw new Exception("Número de Parcelas inválida", 400);
                        }
                        if(empty($product->vehicleModelYear)) {
                            throw new Exception("Ano do Veículo inválido", 400);
                        }
                        if(empty($product->codeFipe)) {
                            throw new Exception("Código FIPE inválido", 400);
                        }
                        if(empty($product->vehicleFipeValue)) {
                            throw new Exception("Valor FIPE inválido", 400);
                        }
                        if(isset($product->downPayment) && empty($product->downPayment)) {
                            throw new Exception("Valor FIPE inválido", 400);
                        }
                        break;
                    case "REFINANCING_HOME":
                        if(empty($product->value)) {
                            throw new Exception("O Valor do Refinanciamento não pode ser vazio", 400);
                        }
                        if(empty($product->installments)) {
                            throw new Exception("Número de Parcelas inválida", 400);
                        }
                        if(empty($product->realEstateType)) {
                            throw new Exception("Tipo de Residência não pode ser vazio", 400);
                        }
                        if(empty($product->realEstateValue)) {
                            throw new Exception("Valor de Residência não pode ser vazio", 400);
                        }
                        if(empty($product->outstandingBalance)) {
                            throw new Exception("O Saldo Devedor não pode ser vazio", 400);
                        }
                        break;
                }
            }
        }
        return true;
    }

    /**
     * Parse props to array
     *
     * @return array
     */
    public function toArray(): array
    {

        return array_filter([
            'mother' => $this->mother,
            'gender' => $this->gender,
            'nationality' => $this->nationality,
            'hometownState' => $this->hometownState,
            'hometown' => $this->hometown,
            'education' => $this->education,
            'relationshipStatus' => $this->relationshipStatus,
            'phoneLandline' => $this->phoneLandline,
            'identity' => $this->identity->toArray(),
            'address' => $this->address->toArray(),
            'vehicle' => $this->vehicle->toArray(),
            'consumerUnit' => $this->consumerUnit->toArray(),
            'business' => $this->business->toArray(),
            'bank' => $this->bank->toArray(),
            'reference' => $this->reference,
            'products' => $this->products
        ], function ($v) {
            return ! is_null($v);
        });
    }
}