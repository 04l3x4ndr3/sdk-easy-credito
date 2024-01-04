<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Endereço
 */
class Address
{
    protected ?string $zipCode;
    protected ?string $address;
    protected ?int $number;
    protected ?string $complement;
    protected ?string $district;
    protected ?string $state;
    protected ?string $city;
    protected ?string $homeType;
    protected ?string $homeSince;

    /**
     * @param ?string $zipCode
     * @param string|null $address
     * @param int|null $number
     * @param string|null $complement
     * @param string|null $district
     * @param string|null $state
     * @param string|null $city
     * @param string|null $homeType
     * @param string|null $homeSince
     */
    public function __construct(
        ?string $zipCode = null,
        ?string $address = null,
        ?int $number = null,
        ?string $complement = null,
        ?string $district = null,
        ?string $state = null,
        ?string $city = null,
        ?string $homeType = null,
        ?string $homeSince = null
    ) {
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

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param ?string $zipCode
     * @return Address
     */
    public function setZipCode(?string $zipCode): Address
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return Address
     */
    public function setAddress(string $address): Address
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Address
     */
    public function setNumber(int $number): Address
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplement(): string
    {
        return $this->complement;
    }

    /**
     * @param string $complement
     * @return Address
     */
    public function setComplement(string $complement): Address
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @param string $district
     * @return Address
     */
    public function setDistrict(string $district): Address
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return Address
     */
    public function setState(string $state): Address
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomeType(): string
    {
        return $this->homeType;
    }

    /**
     * @param string $homeType
     * @return Address
     */
    public function setHomeType(string $homeType): Address
    {
        $this->homeType = $homeType;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomeSince(): string
    {
        return $this->homeSince;
    }

    /**
     * @param string $homeSince
     * @return Address
     */
    public function setHomeSince(string $homeSince): Address
    {
        $this->homeSince = $homeSince;
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
            return ! is_null($v);
        });
    }
}