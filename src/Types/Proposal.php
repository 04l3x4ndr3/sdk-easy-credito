<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

/**
 * Modelos das propostas ENVIADAS pela Tok e RECEBIDAS pela EasyCrédito
 */
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
        ?string $mother = null,
        ?string $gender = null,
        ?string $nationality = null,
        ?string $hometownState = null,
        ?string $hometown = null,
        ?string $education = null,
        ?string $relationshipStatus = null,
        ?string $phoneLandline = null,
        ?Document $identity = null,
        ?ProposalVehicle $vehicle = null,
        ?ConsumerUnit $consumerUnit = null,
        ?Address $address = null,
        ?Business $business = null,
        ?Bank $bank = null,
        ?array $reference = null,
        ?array $products = null
    )
    {
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
     * @return string|null
     */
    public function getMother(): ?string
    {
        return $this->mother;
    }

    /**
     * @param string|null $mother
     * @return Proposal
     */
    public function setMother(?string $mother): Proposal
    {
        $this->mother = $mother;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     * @return Proposal
     */
    public function setGender(?string $gender): Proposal
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    /**
     * @param string|null $nationality
     * @return Proposal
     */
    public function setNationality(?string $nationality): Proposal
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHometownState(): ?string
    {
        return $this->hometownState;
    }

    /**
     * @param string|null $hometownState
     * @return Proposal
     */
    public function setHometownState(?string $hometownState): Proposal
    {
        $this->hometownState = $hometownState;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHometown(): ?string
    {
        return $this->hometown;
    }

    /**
     * @param string|null $hometown
     * @return Proposal
     */
    public function setHometown(?string $hometown): Proposal
    {
        $this->hometown = $hometown;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEducation(): ?string
    {
        return $this->education;
    }

    /**
     * @param string|null $education
     * @return Proposal
     */
    public function setEducation(?string $education): Proposal
    {
        $this->education = $education;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRelationshipStatus(): ?string
    {
        return $this->relationshipStatus;
    }

    /**
     * @param string|null $relationshipStatus
     * @return Proposal
     */
    public function setRelationshipStatus(?string $relationshipStatus): Proposal
    {
        $this->relationshipStatus = $relationshipStatus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneLandline(): ?string
    {
        return $this->phoneLandline;
    }

    /**
     * @param string|null $phoneLandline
     * @return Proposal
     */
    public function setPhoneLandline(?string $phoneLandline): Proposal
    {
        $this->phoneLandline = $phoneLandline;
        return $this;
    }

    /**
     * @return Document|null
     */
    public function getIdentity(): ?Document
    {
        return $this->identity;
    }

    /**
     * @param Document|null $identity
     * @return Proposal
     */
    public function setIdentity(?Document $identity): Proposal
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return ProposalVehicle|null
     */
    public function getVehicle(): ?ProposalVehicle
    {
        return $this->vehicle;
    }

    /**
     * @param ProposalVehicle|null $vehicle
     * @return Proposal
     */
    public function setVehicle(?ProposalVehicle $vehicle): Proposal
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * @return ConsumerUnit|null
     */
    public function getConsumerUnit(): ?ConsumerUnit
    {
        return $this->consumerUnit;
    }

    /**
     * @param ConsumerUnit|null $consumerUnit
     * @return Proposal
     */
    public function setConsumerUnit(?ConsumerUnit $consumerUnit): Proposal
    {
        $this->consumerUnit = $consumerUnit;
        return $this;
    }

    /**
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * @param Address|null $address
     * @return Proposal
     */
    public function setAddress(?Address $address): Proposal
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return Business|null
     */
    public function getBusiness(): ?Business
    {
        return $this->business;
    }

    /**
     * @param Business|null $business
     * @return Proposal
     */
    public function setBusiness(?Business $business): Proposal
    {
        $this->business = $business;
        return $this;
    }

    /**
     * @return Bank|null
     */
    public function getBank(): ?Bank
    {
        return $this->bank;
    }

    /**
     * @param Bank|null $bank
     * @return Proposal
     */
    public function setBank(?Bank $bank): Proposal
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getReference(): ?array
    {
        return $this->reference;
    }

    /**
     * @param array|null $reference
     * @return Proposal
     */
    public function setReference(?array $reference): Proposal
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param array|null $products
     * @return Proposal
     */
    public function setProducts(?array $products): Proposal
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