<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductWorkingCapital extends Product
{
    private ?int $installments;
    private ?float $value;
    private ?string $cnpj;
    private ?string $businessProfession;
    private ?string $employeesCount;
    private ?int $businessIncomeCnpj;
    private ?string $loanObjectives;
    private ?string $bank;
    private ?string $accountType;
    private ?string $agency;
    private ?string $account;

    public function __construct(
        ?float  $value = null,
        ?int    $installments = null,
        ?string $cnpj = null,
        ?string $businessProfession = null,
        ?string $employeesCount = null,
        ?int    $businessIncomeCnpj = null,
        ?string $loanObjectives = null,
        ?string $bank = null,
        ?string $accountType = null,
        ?string $agency = null,
        ?string $account = null
    )
    {
        parent::__construct('WORKING_CAPITAL');

        $this->value = $value;
        $this->installments = $installments;
        $this->cnpj = $cnpj;
        $this->businessProfession = $businessProfession;
        $this->employeesCount = $employeesCount;
        $this->businessIncomeCnpj = $businessIncomeCnpj;
        $this->loanObjectives = $loanObjectives;
        $this->bank = $bank;
        $this->accountType = $accountType;
        $this->agency = $agency;
        $this->account = $account;
    }

    public function getInstallments(): ?int
    {
        return $this->installments;
    }

    public function setInstallments(?int $installments): ProductWorkingCapital
    {
        $this->installments = $installments;
        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): ProductWorkingCapital
    {
        $this->value = $value;
        return $this;
    }

    public function getCnpj(): ?string
    {
        return $this->cnpj;
    }

    public function setCnpj(?string $cnpj): ProductWorkingCapital
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getBusinessProfession(): ?string
    {
        return $this->businessProfession;
    }

    public function setBusinessProfession(?string $businessProfession): ProductWorkingCapital
    {
        $this->businessProfession = $businessProfession;
        return $this;
    }

    public function getEmployeesCount(): ?string
    {
        return $this->employeesCount;
    }

    public function setEmployeesCount(?string $employeesCount): ProductWorkingCapital
    {
        $this->employeesCount = $employeesCount;
        return $this;
    }

    public function getBusinessIncomeCnpj(): ?int
    {
        return $this->businessIncomeCnpj;
    }

    public function setBusinessIncomeCnpj(?int $businessIncomeCnpj): ProductWorkingCapital
    {
        $this->businessIncomeCnpj = $businessIncomeCnpj;
        return $this;
    }

    public function getLoanObjectives(): ?string
    {
        return $this->loanObjectives;
    }

    public function setLoanObjectives(?string $loanObjectives): ProductWorkingCapital
    {
        $this->loanObjectives = $loanObjectives;
        return $this;
    }

    public function getBank(): ?string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): ProductWorkingCapital
    {
        $this->bank = $bank;
        return $this;
    }

    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    public function setAccountType(?string $accountType): ProductWorkingCapital
    {
        $this->accountType = $accountType;
        return $this;
    }

    public function getAgency(): ?string
    {
        return $this->agency;
    }

    public function setAgency(?string $agency): ProductWorkingCapital
    {
        $this->agency = $agency;
        return $this;
    }

    public function getAccount(): ?string
    {
        return $this->account;
    }

    public function setAccount(?string $account): ProductWorkingCapital
    {
        $this->account = $account;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            "type" => $this->type,
            "installments" => $this->installments,
            "value" => $this->value,
            "cnpj" => $this->cnpj,
            "businessProfession" => $this->businessProfession,
            "employeesCount" => $this->employeesCount,
            "businessIncomeCnpj" => $this->businessIncomeCnpj,
            "loanObjectives" => $this->loanObjectives,
            "bank" => $this->bank,
            "accountType" => $this->accountType,
            "agency" => $this->agency,
            "account" => $this->account,
        ], function ($v) {
            return !is_null($v);
        });
    }
}
