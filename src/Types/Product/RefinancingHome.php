<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;

use O4l3x4ndr3\SdkEasyCredito\Types\Product;

class RefinancingHome extends Product
{
    protected float $value;
    protected int $installments;
    protected string $realEstateType;
    protected float $realEstateValue;
    protected float $outstandingBalance;

    /**
     * @param float|null $value
     * @param int|null $installments
     * @param string|null $realEstateType
     * @param float|null $realEstateValue
     * @param float|null $outstandingBalance
     */
    public function __construct(
        ?float  $value,
        ?int    $installments,
        ?string $realEstateType,
        ?float  $realEstateValue,
        ?float  $outstandingBalance
    ) {
        parent::__construct(null, "REFINANCING_HOME");
        $this->value = $value;
        $this->installments = $installments;
        $this->realEstateType = $realEstateType;
        $this->realEstateValue = $realEstateValue;
        $this->outstandingBalance = $outstandingBalance;
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
     * @return RefinancingHome
     */
    public function setValue(float $value): RefinancingHome
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
     * @return RefinancingHome
     */
    public function setInstallments(int $installments): RefinancingHome
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * @return string
     */
    public function getRealEstateType(): string
    {
        return $this->realEstateType;
    }

    /**
     * @param string $realEstateType
     * @return RefinancingHome
     */
    public function setRealEstateType(string $realEstateType): RefinancingHome
    {
        $this->realEstateType = $realEstateType;
        return $this;
    }

    /**
     * @return float
     */
    public function getRealEstateValue(): float
    {
        return $this->realEstateValue;
    }

    /**
     * @param float $realEstateValue
     * @return RefinancingHome
     */
    public function setRealEstateValue(float $realEstateValue): RefinancingHome
    {
        $this->realEstateValue = $realEstateValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getOutstandingBalance(): float
    {
        return $this->outstandingBalance;
    }

    /**
     * @param float $outstandingBalance
     * @return RefinancingHome
     */
    public function setOutstandingBalance(float $outstandingBalance): RefinancingHome
    {
        $this->outstandingBalance = $outstandingBalance;
        return $this;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            array_filter([
                'value' => $this->value,
                'installments' => $this->installments,
                'realEstateType' => $this->realEstateType,
                'realEstateValue' => $this->realEstateValue,
                'outstandingBalance' => $this->outstandingBalance
            ], function ($v) {
                return !is_null($v);
            })
        );
    }
}
