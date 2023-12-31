<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;
use O4l3x4ndr3\SdkEasyCredito\Types\LogData;
use O4l3x4ndr3\SdkEasyCredito\Types\Product;
class WorkingCapital extends Product
{
    protected float $value;
    protected int $installments;
    protected string $cpnj;
    protected string $businessProfession;
    protected string $employeesCount;
    protected float $businessIncomeCpnj;
    protected string $loanObjectives;
    protected ?string $bank;
    protected string $accountType;
    protected ?string $agency;
    protected string $account;
    protected ?LogData $logData;

    /**
     * @param float $value
     * @param int $installments
     * @param string $cpnj
     * @param string $businessProfession
     * @param string $employeesCount
     * @param float $businessIncomeCpnj
     * @param string $loanObjectives
     * @param string|null $bank
     * @param string $accountType
     * @param ?string $agency
     * @param string $account
     * @param LogData|null $logData
     */
    public function __construct(
        float              $value,
        int                $installments,
        string             $cpnj,
        string $businessProfession,
        string     $employeesCount,
        float              $businessIncomeCpnj,
        string     $loanObjectives,
        ?string               $bank,
        string        $accountType,
        ?string                $agency,
        string             $account,
        ?LogData    $logData
    ) {
        parent::__construct(null, "WORKING_CAPITAL", $logData);
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
     * @return string
     */
    public function getBusinessProfession(): string
    {
        return $this->businessProfession;
    }

    /**
     * @param string $businessProfession
     * @return WorkingCapital
     */
    public function setBusinessProfession(string $businessProfession): WorkingCapital
    {
        $this->businessProfession = $businessProfession;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeesCount(): string
    {
        return $this->employeesCount;
    }

    /**
     * @param string $employeesCount
     * @return WorkingCapital
     */
    public function setEmployeesCount(string $employeesCount): WorkingCapital
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
     * @return string
     */
    public function getLoanObjectives(): string
    {
        return $this->loanObjectives;
    }

    /**
     * @param string $loanObjectives
     * @return WorkingCapital
     */
    public function setLoanObjectives(string $loanObjectives): WorkingCapital
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
     * @return string
     */
    public function getAccountType(): string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return WorkingCapital
     */
    public function setAccountType(string $accountType): WorkingCapital
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
