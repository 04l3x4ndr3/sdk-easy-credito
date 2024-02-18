<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;
use O4l3x4ndr3\SdkEasyCredito\Types\LogData;
use O4l3x4ndr3\SdkEasyCredito\Types\Product;
use O4l3x4ndr3\SdkEasyCredito\Types\Vehicle;
class RefinancingAuto extends Product
{
    protected float $value;
    protected int $installments;
    protected Vehicle $vehicle;
    protected ?LogData $logData;

    /**
     * @param float $value
     * @param int $installments
     * @param Vehicle $vehicle
     * @param LogData|null $logData
     */
    public function __construct(
        float $value,
        int $installments,
        Vehicle $vehicle,
        ?LogData    $logData
    ) {
        parent::__construct(null, "REFINANCING_AUTO", $logData);
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
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }

    /**
     * @param Vehicle $vehicle
     * @return RefinancingAuto
     */
    public function setVehicle(Vehicle $vehicle): RefinancingAuto
    {
        $this->vehicle = $vehicle;
        return $this;
    }
    public function toArray(): ?array
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
