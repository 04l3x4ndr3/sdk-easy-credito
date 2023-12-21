<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;

use O4l3x4ndr3\SdkEasyCredito\Types\Product;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\BusinessProfession;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\WorkingCapitalLoanObjectives;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\AccountType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\EmployeesCount;

class WorkingCapital extends Product
{
    protected float $value;
    protected int $installments;
    protected string $cpnj;
    protected BusinessProfession $businessProfession;
    protected EmployeesCount $employeesCount;
    protected float $businessIncomeCpnj;
    protected WorkingCapitalLoanObjectives $loanObjectives;
    protected ?string $bank;
    protected AccountType $accountType;
    protected ?string $agency;
    protected string $account;

    /**
     * @param float $value
     * @param int $installments
     * @param string $cpnj
     * @param BusinessProfession $businessProfession
     * @param EmployeesCount $employeesCount
     * @param float $businessIncomeCpnj
     * @param WorkingCapitalLoanObjectives $loanObjectives
     * @param string $bank
     * @param AccountType $accountType
     * @param ?string $agency
     * @param string $account
     */
    public function __construct(
        float              $value,
        int                $installments,
        string             $cpnj,
        BusinessProfession $businessProfession,
        EmployeesCount     $employeesCount,
        float              $businessIncomeCpnj,
        WorkingCapitalLoanObjectives     $loanObjectives,
        ?string               $bank,
        AccountType        $accountType,
        ?string                $agency,
        string             $account
    ) {
        parent::__construct(null, ProductTypestring::WORKING_CAPITAL);
        $this->value = $value;
        $this->installments = $installments;
        $this->cpnj = $cpnj;
        $this->businessProfession = $businessProfession;
        $this->employeesCount = $employeesCount;
        $this->businessIncomeCpnj = $businessIncomeCpnj;
        $this->loanObjectives = $loanObjectives;
        $this->bank = $bank;
        $this->accountType = $accountType;
        $this->agency = $agency;
        $this->account = $account;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return WorkingCapital
     */
    public function setValue(float $value): WorkingCapital
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallments(): int
    {
        return $this->installments;
    }

    /**
     * @param int $installments
     * @return WorkingCapital
     */
    public function setInstallments(int $installments): WorkingCapital
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * @return string
     */
    public function getCpnj(): string
    {
        return $this->cpnj;
    }

    /**
     * @param string $cpnj
     * @return WorkingCapital
     */
    public function setCpnj(string $cpnj): WorkingCapital
    {
        $this->cpnj = $cpnj;
        return $this;
    }

    /**
     * @return BusinessProfession
     */
    public function getBusinessProfession(): BusinessProfession
    {
        return $this->businessProfession;
    }

    /**
     * @param BusinessProfession $businessProfession
     * @return WorkingCapital
     */
    public function setBusinessProfession(BusinessProfession $businessProfession): WorkingCapital
    {
        $this->businessProfession = $businessProfession;
        return $this;
    }

    /**
     * @return EmployeesCount
     */
    public function getEmployeesCount(): EmployeesCount
    {
        return $this->employeesCount;
    }

    /**
     * @param EmployeesCount $employeesCount
     * @return WorkingCapital
     */
    public function setEmployeesCount(EmployeesCount $employeesCount): WorkingCapital
    {
        $this->employeesCount = $employeesCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getBusinessIncomeCpnj(): float
    {
        return $this->businessIncomeCpnj;
    }

    /**
     * @param float $businessIncomeCpnj
     * @return WorkingCapital
     */
    public function setBusinessIncomeCpnj(float $businessIncomeCpnj): WorkingCapital
    {
        $this->businessIncomeCpnj = $businessIncomeCpnj;
        return $this;
    }

    /**
     * @return WorkingCapitalLoanObjectives
     */
    public function getLoanObjectives(): WorkingCapitalLoanObjectives
    {
        return $this->loanObjectives;
    }

    /**
     * @param WorkingCapitalLoanObjectives $loanObjectives
     * @return WorkingCapital
     */
    public function setLoanObjectives(WorkingCapitalLoanObjectives $loanObjectives): WorkingCapital
    {
        $this->loanObjectives = $loanObjectives;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }

    /**
     * @param ?string $bank
     * @return WorkingCapital
     */
    public function setBank(?string $bank): WorkingCapital
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return AccountType
     */
    public function getAccountType(): AccountType
    {
        return $this->accountType;
    }

    /**
     * @param AccountType $accountType
     * @return WorkingCapital
     */
    public function setAccountType(AccountType $accountType): WorkingCapital
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getAgency(): ?string
    {
        return $this->agency;
    }

    /**
     * @param ?string $agency
     * @return WorkingCapital
     */
    public function setAgency(?string $agency): WorkingCapital
    {
        $this->agency = $agency;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $account
     * @return WorkingCapital
     */
    public function setAccount(string $account): WorkingCapital
    {
        $this->account = $account;
        return $this;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            array_filter([
                'value' => $this->value,
                'installments' => $this->installments,
                'cpnj' => $this->cpnj,
                'businessProfession' => $this->businessProfession,
                'employeesCount' => $this->employeesCount,
                'businessIncomeCpnj' => $this->businessIncomeCpnj,
                'loanObjectives' => $this->loanObjectives,
                'bank' => $this->bank,
                'accountType' => $this->accountType,
                'agency' => $this->agency,
                'account' => $this->account
            ], function ($v) {
                return !is_null($v);
            })
        );
    }
}
