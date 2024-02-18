<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

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

    public function getOccupation(): string
    {
        return $this->occupation;
    }

    public function setOccupation(?string $occupation): Business
    {
        $this->occupation = $occupation;
        return $this;
    }

    public function getOccupyType(): ?string
    {
        return $this->occupyType;
    }

    public function setOccupyType(?string $occupyType): Business
    {
        $this->occupyType = $occupyType;
        return $this;
    }

    public function getProfession(): string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): Business
    {
        $this->profession = $profession;
        return $this;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): Business
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): Business
    {
        $this->phone = $phone;
        return $this;
    }

    public function getIncome(): float
    {
        return $this->income;
    }

    public function setIncome(?float $income): Business
    {
        $this->income = $income;
        return $this;
    }

    public function getPayday(): int
    {
        return $this->payday;
    }

    public function setPayday(?int $payday): Business
    {
        $this->payday = $payday;
        return $this;
    }

    public function getEmploymentSince(): string
    {
        return $this->employmentSince;
    }

    public function setEmploymentSince(?string $employmentSince): Business
    {
        $this->employmentSince = $employmentSince;
        return $this;
    }

    public function getBenefitNumber(): string
    {
        return $this->benefitNumber;
    }

    public function setBenefitNumber(?string $benefitNumber): Business
    {
        $this->benefitNumber = $benefitNumber;
        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): Business
    {
        $this->address = $address;
        return $this;
    }

    public function toArray(): ?array
    {
        $arAddress = isset($this->address) ? $this->address->toArray() : null;

        $arBussiness = array_merge([
            'occupation' => $this->occupation,
            'occupyType' => $this->occupyType,
            'profession' => $this->profession,
            'companyName' => $this->companyName,
            'phone' => $this->phone,
            'income' => $this->income,
            'payday' => $this->payday,
            'employmentSince' => $this->employmentSince,
            'benefitNumber' => $this->benefitNumber
        ], $arAddress);

        return array_filter($arBussiness, function ($v) {
            return !is_null($v);
        });
    }
}