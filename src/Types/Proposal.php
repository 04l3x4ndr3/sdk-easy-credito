<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Proposal
{
    protected ?string $mother;
    protected ?string $gender;
    protected ?string $nationality;
    protected ?string $hometownState;
    protected ?string $hometown;
    protected ?string $education;
    protected ?string $relationshipStatus;
    protected ?string $phoneLandline;
    protected ?Document $identity;
    protected ?ProposalVehicle $vehicle;
    protected ?ConsumerUnit $consumerUnit;
    protected ?Address $address;
    protected ?Business $business;
    protected ?Bank $bank;
    protected ?array $reference;
    protected ?array $products;

    public function __construct(
        ?string   $mother = null,
        ?string   $gender = null,
        ?string   $education = null,
        ?string   $relationshipStatus = null,
        ?Document $identity = null,
        ?Address  $address = null,
        ?Business $business = null,
        ?Bank     $bank = null,
    )
    {
        $this->mother = $mother;
        $this->gender = $gender;
        $this->nationality = null;
        $this->hometownState = null;
        $this->hometown = null;
        $this->education = $education;
        $this->relationshipStatus = $relationshipStatus;
        $this->phoneLandline = null;
        $this->identity = $identity;
        $this->vehicle = null;
        $this->consumerUnit = null;
        $this->address = $address;
        $this->business = $business;
        $this->bank = $bank;
        $this->reference = null;
        $this->products = null;
    }

    public function getMother(): ?string
    {
        return $this->mother;
    }

    public function setMother(?string $mother): Proposal
    {
        $this->mother = $mother;
        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): Proposal
    {
        $this->gender = $gender;
        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): Proposal
    {
        $this->nationality = $nationality;
        return $this;
    }

    public function getHometownState(): ?string
    {
        return $this->hometownState;
    }

    public function setHometownState(?string $hometownState): Proposal
    {
        $this->hometownState = $hometownState;
        return $this;
    }

    public function getHometown(): ?string
    {
        return $this->hometown;
    }

    public function setHometown(?string $hometown): Proposal
    {
        $this->hometown = $hometown;
        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(?string $education): Proposal
    {
        $this->education = $education;
        return $this;
    }

    public function getRelationshipStatus(): ?string
    {
        return $this->relationshipStatus;
    }

    public function setRelationshipStatus(?string $relationshipStatus): Proposal
    {
        $this->relationshipStatus = $relationshipStatus;
        return $this;
    }

    public function getPhoneLandline(): ?string
    {
        return $this->phoneLandline;
    }

    public function setPhoneLandline(?string $phoneLandline): Proposal
    {
        $this->phoneLandline = $phoneLandline;
        return $this;
    }

    public function getIdentity(): ?Document
    {
        return $this->identity;
    }

    public function setIdentity(?Document $identity): Proposal
    {
        $this->identity = $identity;
        return $this;
    }

    public function getVehicle(): ?ProposalVehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?ProposalVehicle $vehicle): Proposal
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    public function getConsumerUnit(): ?ConsumerUnit
    {
        return $this->consumerUnit;
    }

    public function setConsumerUnit(?ConsumerUnit $consumerUnit): Proposal
    {
        $this->consumerUnit = $consumerUnit;
        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): Proposal
    {
        $this->address = $address;
        return $this;
    }

    public function getBusiness(): ?Business
    {
        return $this->business;
    }

    public function setBusiness(?Business $business): Proposal
    {
        $this->business = $business;
        return $this;
    }

    public function getBank(): ?Bank
    {
        return $this->bank;
    }

    public function setBank(?Bank $bank): Proposal
    {
        $this->bank = $bank;
        return $this;
    }

    public function getReference(): ?array
    {
        return $this->reference;
    }

    public function setReference(?array $reference): Proposal
    {
        $this->reference = $reference;
        return $this;
    }

    public function addReference(?Reference $reference): Proposal {
        $this->reference[] = $reference->toArray();
        return $this;
    }

    public function getProducts(): ?array
    {
        return $this->products;
    }

    public function setProducts(?array $products): Proposal
    {
        $this->products = $products;
        return $this;
    }

    public function addProduct(Product|ProductAuto|ProductCard|ProductDebt|ProductFinancingAuto|ProductHome|ProductLoan|ProductWorkingCapital $product): Proposal
    {
        $this->products[] = $product->toArray();
        return $this;
    }

    public function toArray(): ?array
    {
        $arIdentity = isset($this->identity) ? $this->identity->toArray() : null;
        $arAddress = isset($this->address) ? $this->address->toArray() : null;
        $arVehicle = isset($this->vehicle) ? $this->vehicle->toArray() : null;
        $arConsumerUnit = isset($this->consumerUnit) ? $this->consumerUnit->toArray() : null;
        $arBusiness = isset($this->business) ? $this->business->toArray() : null;
        $arBank = isset($this->bank) ? $this->bank->toArray() : null;

        return array_filter([
            'mother' => $this->mother,
            'gender' => $this->gender,
            'nationality' => $this->nationality,
            'hometownState' => $this->hometownState,
            'hometown' => $this->hometown,
            'education' => $this->education,
            'relationshipStatus' => $this->relationshipStatus,
            'phoneLandline' => $this->phoneLandline,
            'identity' => $arIdentity,
            'address' => $arAddress,
            'vehicle' => $arVehicle,
            'consumerUnit' => $arConsumerUnit,
            'business' => $arBusiness,
            'bank' => $arBank,
            'reference' => $this->reference,
            'products' => $this->products
        ], function ($v) {
            return !is_null($v);
        });
    }
}