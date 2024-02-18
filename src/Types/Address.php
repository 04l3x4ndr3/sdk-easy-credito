<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Endereço
 */
class Address
{
    private ?string $zipCode;
    private ?string $address;
    private ?int $number;
    private ?string $complement;
    private ?string $district;
    private ?string $state;
    private ?string $city;
    private ?string $homeType;
    private ?string $homeSince;


    public function __construct(
        ?string $zipCode = null,
        ?string $address = null,
        ?int    $number = null,
        ?string $complement = null,
        ?string $district = null,
        ?string $state = null,
        ?string $city = null,
        ?string $homeType = null,
        ?string $homeSince = null
    )
    {
        $this->zipCode = $zipCode;
        $this->address = $address;
        $this->number = $number;
        $this->complement = $complement;
        $this->district = $district;
        $this->state = $state;
        $this->city = $city;
        $this->homeType = $homeType;
        $this->homeSince = $homeSince;
    }


    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): Address
    {
        $this->address = $address;
        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): Address
    {
        $this->number = $number;
        return $this;
    }

    public function getComplement(): ?string
    {
        return $this->complement;
    }

    public function setComplement(?string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    public function getDistrict(): ?string
    {
        return $this->district;
    }

    public function setDistrict(?string $district): Address
    {
        $this->district = $district;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): Address
    {
        $this->state = $state;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    public function getHomeType(): ?string
    {
        return $this->homeType;
    }

    public function setHomeType(?string $homeType): Address
    {
        $this->homeType = $homeType;
        return $this;
    }

    public function getHomeSince(): ?string
    {
        return $this->homeSince;
    }

    public function setHomeSince(?string $homeSince): Address
    {
        $this->homeSince = $homeSince;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'zipCode' => $this->zipCode,
            'address' => $this->address,
            'number' => $this->number,
            'complement' => $this->complement,
            'district' => $this->district,
            'state' => $this->state,
            'city' => $this->city,
            'homeType' => $this->homeType,
            'homeSince' => $this->homeSince
        ], function ($v) {
            return !is_null($v);
        });
    }
}