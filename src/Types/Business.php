<?php
namespace O4l3x4ndr3\SdkEasyCredito\Types;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmploymentSince;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Profession;

/**
 * Modelo de Perfil Profissional
 */
class Business
{
    protected string $occupation;
    protected string $profession;
    protected string $companyName;
    protected string $phone;
    protected float $income;
    protected int $payday;
    protected string $employmentSince;
    protected ?int $benefitNumber;
    protected ?Address $address;

    /**
     * @param string $occupation
     * @param string $profession
     * @param string $companyName
     * @param string $phone
     * @param float $income
     * @param int $payday
     * @param string $employmentSince
     * @param int|null $benefitNumber
     * @param Address|null $address
     */
    public function __construct(string $occupation, string $profession, string $companyName, string $phone, float $income, int $payday, string $employmentSince, ?int $benefitNumber, ?Address $address)
    {
        $this->occupation = $occupation;
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
    public function setOccupation(string $occupation): Business
    {
        $this->occupation = Occupation::from($occupation)->value;
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
    public function setProfession(string $profession): Business
    {
        $this->profession = Profession::from($profession)->value;
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
    public function setCompanyName(string $companyName): Business
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
    public function setPhone(string $phone): Business
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
    public function setIncome(float $income): Business
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
    public function setPayday(int $payday): Business
    {
        $this->payday = $payday;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmploymentSince(): EmploymentSince
    {
        return $this->employmentSince;
    }

    /**
     * @param EmploymentSince $employmentSince
     * @return Business
     */
    public function setEmploymentSince(EmploymentSince $employmentSince): Business
    {
        $this->employmentSince = EmploymentSince::from($employmentSince)->value;
        return $this;
    }

    /**
     * @return int
     */
    public function getBenefitNumber(): int
    {
        return $this->benefitNumber;
    }

    /**
     * @param int $benefitNumber
     * @return Business
     */
    public function setBenefitNumber(int $benefitNumber): Business
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
     * @return array
     */
    public function toArray(): array
    {
        return array_merge(
            array_filter([
                'occupation' => $this->occupation,
                'profession' => $this->profession,
                'companyName' => $this->companyName,
                'phone' => $this->phone,
                'income' => $this->income,
                'payday' => $this->payday,
                'employmentSince' => $this->employmentSince,
                'benefitNumber' => $this->benefitNumber
            ], function ($v) {
                return ! is_null($v);
            }),
            $this->address->toArray()
        );
    }
}