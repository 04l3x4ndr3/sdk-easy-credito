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
    protected Occupation $occupation;
    protected Profession $profession;
    protected string $companyName;
    protected string $phone;
    protected float $income;
    protected int $payday;
    protected EmploymentSince $employmentSince;
    protected ?int $benefitNumber;
    protected ?Address $address;

    /**
     * @param Occupation $occupation
     * @param Profession $profession
     * @param string $companyName
     * @param string $phone
     * @param float $income
     * @param int $payday
     * @param EmploymentSince $employmentSince
     * @param int|null $benefitNumber
     * @param Address|null $address
     */
    public function __construct(Occupation $occupation, Profession $profession, string $companyName, string $phone, float $income, int $payday, EmploymentSince $employmentSince, ?int $benefitNumber, ?Address $address)
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
     * @return Occupation
     */
    public function getOccupation(): Occupation
    {
        return $this->occupation;
    }

    /**
     * @param Occupation $occupation
     * @return Business
     */
    public function setOccupation(Occupation $occupation): Business
    {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * @return Profession
     */
    public function getProfession(): Profession
    {
        return $this->profession;
    }

    /**
     * @param Profession $profession
     * @return Business
     */
    public function setProfession(Profession $profession): Business
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
     * @return EmploymentSince
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
        $this->employmentSince = $employmentSince;
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