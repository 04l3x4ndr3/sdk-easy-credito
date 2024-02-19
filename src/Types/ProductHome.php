<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductHome extends Product
{
    private ?float $value;
    private ?int $installments;
    private ?string $realStateType;
    private ?float $realStateValue;
    private ?float $outstandingBalance;

    public function __construct(
        ?float  $value = null,
        ?int    $installments = null,
        ?string $realStateType = null,
        ?float  $realStateValue = null,
        ?float  $outstandingBalance = null,
    )
    {
        parent::__construct('REFINANCING_HOME');

        $this->value = $value;
        $this->installments = $installments;
        $this->realStateType = $realStateType;
        $this->realStateValue = $realStateValue;
        $this->outstandingBalance = $outstandingBalance;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): ProductHome
    {
        $this->value = $value;
        return $this;
    }

    public function getInstallments(): ?int
    {
        return $this->installments;
    }

    public function setInstallments(?int $installments): ProductHome
    {
        $this->installments = $installments;
        return $this;
    }

    public function getRealStateType(): ?string
    {
        return $this->realStateType;
    }

    public function setRealStateType(?string $realStateType): ProductHome
    {
        $this->realStateType = $realStateType;
        return $this;
    }

    public function getRealStateValue(): ?float
    {
        return $this->realStateValue;
    }

    public function setRealStateValue(?float $realStateValue): ProductHome
    {
        $this->realStateValue = $realStateValue;
        return $this;
    }

    public function getOutstandingBalance(): ?float
    {
        return $this->outstandingBalance;
    }

    public function setOutstandingBalance(?float $outstandingBalance): ProductHome
    {
        $this->outstandingBalance = $outstandingBalance;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'type' => $this->type,
            'value' => $this->value,
            'installments' => $this->installments,
            'realEstateType' => $this->realStateType,
            'realEstateValue' => $this->realStateValue,
            'outstandingBalance' => $this->outstandingBalance
        ], function ($v) {
            return !is_null($v);
        });
    }
}
