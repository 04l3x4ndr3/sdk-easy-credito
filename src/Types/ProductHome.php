<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductHome extends Product
{
    private ?float $value;
    private ?int $installments;
    private ?string $realEstateType;
    private ?float $realEstateValue;
    private ?float $outstandingBalance;

    public function __construct(
        ?float  $value = null,
        ?int    $installments = null,
        ?string $realEstateType = null,
        ?float  $realEstateValue = null,
        ?float  $outstandingBalance = null,
    )
    {
        parent::__construct('REFINANCING_HOME');

        $this->value = $value;
        $this->installments = $installments;
        $this->realEstateType = $realEstateType;
        $this->realEstateValue = $realEstateValue;
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

    public function getrealEstateType(): ?string
    {
        return $this->realEstateType;
    }

    public function setrealEstateType(?string $realEstateType): ProductHome
    {
        $this->realEstateType = $realEstateType;
        return $this;
    }

    public function getrealEstateValue(): ?float
    {
        return $this->realEstateValue;
    }

    public function setrealEstateValue(?float $realEstateValue): ProductHome
    {
        $this->realEstateValue = $realEstateValue;
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
            'realEstateType' => $this->realEstateType,
            'realEstateValue' => $this->realEstateValue,
            'outstandingBalance' => $this->outstandingBalance
        ], function ($v) {
            return !is_null($v);
        });
    }
}
