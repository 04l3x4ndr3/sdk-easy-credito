<?php
namespace O4l3x4ndr3\SdkEasyCredito\Types;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeSince;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\HomeType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States;

/**
 * Modelo de Endereço
 */
class Address
{
    protected ?string $zipCode;
    protected string $address;
    protected int $number;
    protected string $complement;
    protected string $district;
    protected States $state;
    protected string $city;
    protected ?HomeType $homeType;
    protected ?HomeSince $homeSince;

    /**
     * @param ?string $zipCode
     * @param string $address
     * @param int $number
     * @param string $complement
     * @param string $district
     * @param States $state
     * @param string $city
     * @param HomeType $homeType
     * @param HomeSince $homeSince
     */
    public function __construct(?string $zipCode, string $address, int $number, string $complement, string $district, States $state, string $city, ?HomeType $homeType, ?HomeSince $homeSince)
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

    /**
     * @return int
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
     * @return States
     */
    public function getState(): States
    {
        return $this->state;
    }

    /**
     * @param States $state
     * @return Address
     */
    public function setState(States $state): Address
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
     * @return HomeType
     */
    public function getHomeType(): HomeType
    {
        return $this->homeType;
    }

    /**
     * @param HomeType $homeType
     * @return Address
     */
    public function setHomeType(HomeType $homeType): Address
    {
        $this->homeType = $homeType;
        return $this;
    }

    /**
     * @return HomeSince
     */
    public function getHomeSince(): HomeSince
    {
        return $this->homeSince;
    }

    /**
     * @param HomeSince $homeSince
     * @return Address
     */
    public function setHomeSince(HomeSince $homeSince): Address
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