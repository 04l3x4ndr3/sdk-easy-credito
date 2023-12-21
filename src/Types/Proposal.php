<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Gender;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Nationality;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\RelationshipStatus;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States;

/**
 * Modelos das propostas ENVIADAS pela Tok e RECEBIDAS pela EasyCrédito
 */
class Proposal
{
    protected string $mother;
    protected Gender $gender;
    protected Nationality $nationality;
    protected States $hometownState;
    protected string $hometown;
    protected Education $education;
    protected RelationshipStatus $relationshipStatus;
    protected string $phoneLandline;
    protected ?Document $identity;
    protected ?ProposalVehicle $vehicle;
    protected ConsumerUnit $consumerUnit;
    protected Address $address;
    protected ?Business $business;
    protected Bank $bank;
    protected array $reference;
    protected array $products;
    /**
     * @param string $mother
     * @param Gender $gender
     * @param Nationality $nationality
     * @param States $hometownState
     * @param string $hometown
     * @param Education $education
     * @param RelationshipStatus $relationshipStatus
     * @param string $phoneLandline
     * @param ProposalVehicle $vehicle
     * @param ConsumerUnit $consumerUnit
     * @param Address $address
     * @param Business $business
     * @param Bank $bank
     * @param array $reference
     * @param array $products
     */
    public function __construct(
        ?string $mother,
        ?Gender $gender,
        ?Nationality $nationality,
        ?States $hometownState,
        ?string $hometown,
        ?Education $education,
        ?RelationshipStatus $relationshipStatus,
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
     * @return Gender
     */
    public function getGender(): Gender
    {
        return $this->gender;
    }

    /**
     * @param Gender $gender
     * @return Proposal
     */
    public function setGender(Gender $gender): Proposal
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return Nationality
     */
    public function getNationality(): Nationality
    {
        return $this->nationality;
    }

    /**
     * @param Nationality $nationality
     * @return Proposal
     */
    public function setNationality(Nationality $nationality): Proposal
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * @return States
     */
    public function getHometownState(): States
    {
        return $this->hometownState;
    }

    /**
     * @param States $hometownState
     * @return Proposal
     */
    public function setHometownState(States $hometownState): Proposal
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
     * @return Education
     */
    public function getEducation(): Education
    {
        return $this->education;
    }

    /**
     * @param Education $education
     * @return Proposal
     */
    public function setEducation(Education $education): Proposal
    {
        $this->education = $education;
        return $this;
    }

    /**
     * @return RelationshipStatus
     */
    public function getRelationshipStatus(): RelationshipStatus
    {
        return $this->relationshipStatus;
    }

    /**
     * @param RelationshipStatus $relationshipStatus
     * @return Proposal
     */
    public function setRelationshipStatus(RelationshipStatus $relationshipStatus): Proposal
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