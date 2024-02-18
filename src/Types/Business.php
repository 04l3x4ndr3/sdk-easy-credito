<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Perfil Profissional
 */
class Business
{
    protected ?string $occupation;
    protected ?string $occupyType;
    protected ?string $profession;
    protected ?string $companyName;
    protected ?string $phone;
    protected ?float $income;
    protected ?int $payday;
    protected ?string $employmentSince;
    protected ?string $benefitNumber;
    protected ?Address $address;

    /**
     * @param string|null $occupation
     * @param string|null $occupyType
     * @param string|null $profession
     * @param string|null $companyName
     * @param string|null $phone
     * @param float|null $income
     * @param int|null $payday
     * @param string|null $employmentSince
     * @param string|null $benefitNumber
     * @param Address|null $address
     */
    public function __construct(
        ?string  $occupation = null,
        ?string  $occupyType = null,
        ?string  $profession = null,
        ?string  $companyName = null,
        ?string  $phone = null,
        ?float   $income = null,
        ?int     $payday = null,
        ?string  $employmentSince = null,
        ?string  $benefitNumber = null,
        ?Address $address = null
    )
    {
        $this->occupation = $occupation;
        $this->occupyType = $occupyType;
        $this->profession = $profession;
        $this->companyName = $companyName;
        $this->phone = $phone;
        $this->income = $income;
        $this->payday = $payday;
        $this->employmentSince = $employmentSince;
        $this->benefitNumber = $benefitNumber;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     * @return Business
     */
    public function setOccupation(?string $occupation): Business
    {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOccupyType(): ?string
    {
        return $this->occupyType;
    }

    /**
     * @param string|null $occupyType
     * @return Business
     */
    public function setOccupyType(?string $occupyType): Business
    {
        $this->occupyType = $occupyType;
        return $this;
    }


    /**
     * @return string
     */
    public function getProfession(): string
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     * @return Business
     */
    public function setProfession(?string $profession): Business
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Business
     */
    public function setCompanyName(?string $companyName): Business
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Business
     */
    public function setPhone(?string $phone): Business
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return float
     */
    public function getIncome(): float
    {
        return $this->income;
    }

    /**
     * @param float $income
     * @return Business
     */
    public function setIncome(?float $income): Business
    {
        $this->income = $income;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayday(): int
    {
        return $this->payday;
    }

    /**
     * @param int $payday
     * @return Business
     */
    public function setPayday(?int $payday): Business
    {
        $this->payday = $payday;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmploymentSince(): string
    {
        return $this->employmentSince;
    }

    /**
     * @param string $employmentSince
     * @return Business
     */
    public function setEmploymentSince(?string $employmentSince): Business
    {
        $this->employmentSince = $employmentSince;
        return $this;
    }

    /**
     * @return string
     */
    public function getBenefitNumber(): string
    {
        return $this->benefitNumber;
    }

    /**
     * @param string $benefitNumber
     * @return Business
     */
    public function setBenefitNumber(?string $benefitNumber): Business
    {
        $this->benefitNumber = $benefitNumber;
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
     * @return Business
     */
    public function setAddress(?Address $address): Business
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Parse props to array
     *
     * @return array|null
     */
    public function toArray(): ?array
    {
        return
            array_filter(array_merge([
                'occupation' => $this->occupation,
                'occupyType' => $this->occupyType,
                'profession' => $this->profession,
                'companyName' => $this->companyName,
                'phone' => $this->phone,
                'income' => $this->income,
                'payday' => $this->payday,
                'employmentSince' => $this->employmentSince,
                'benefitNumber' => $this->benefitNumber
            ], $this->address->toArray()), function ($v) {
                return !is_null($v);
            });
    }
}