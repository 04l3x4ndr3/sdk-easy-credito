<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;

use O4l3x4ndr3\SdkEasyCredito\Types\Product;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;
use O4l3x4ndr3\SdkEasyCredito\Types\Vehicle;

class RefinancingAuto extends Product
{
    protected float $value;
    protected int $installments;
    protected Vehicle $vehicle;

    /**
     * @param float $value
     * @param int $installments
     * @param Vehicle $vehicle
     */
    public function __construct(
        float $value,
        int $installments,
        Vehicle $vehicle
    ) {
        parent::__construct(null, ProductTypestring::REFINANCING_AUTO);
        $this->value = $value;
        $this->installments = $installments;
        $this->vehicle = $vehicle;
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
     * @return RefinancingAuto
     */
    public function setValue(float $value): RefinancingAuto
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
     * @return RefinancingAuto
     */
    public function setInstallments(int $installments): RefinancingAuto
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * @return \O4l3x4ndr3\SdkEasyCredito\Types\Vehicle
     */
    public function getVehicle(): \O4l3x4ndr3\SdkEasyCredito\Types\Vehicle
    {
        return $this->vehicle;
    }

    /**
     * @param \O4l3x4ndr3\SdkEasyCredito\Types\Vehicle $vehicle
     * @return RefinancingAuto
     */
    public function setVehicle(\O4l3x4ndr3\SdkEasyCredito\Types\Vehicle $vehicle): RefinancingAuto
    {
        $this->vehicle = $vehicle;
        return $this;
    }
    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            $this->vehicle->toArray(),
            array_filter([
                'value' => $this->value,
                'installments' => $this->installments
            ], function ($v) {
                return !is_null($v);
            })
        );
    }
}
