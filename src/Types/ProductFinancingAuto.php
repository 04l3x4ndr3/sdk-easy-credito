<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductFinancingAuto implements Product
{

    private ?string $type;
    private ?float $value;
    private ?string $vehicleBrand;
    private ?string $vehicleModel;
    private ?int $installments;
    private ?int $vehicleModelYear;
    private ?string $codeFipe;
    private ?float $vehicleFipeValue;
    private ?float $downPayment;
    private ?bool $used;

    public function __construct(
        ?float  $value = null,
        ?int    $installments = null,
        ?string $vehicleBrand = null,
        ?string $vehicleModel = null,
        ?int    $vehicleModelYear = null,
        ?string $codeFipe = null,
        ?float  $vehicleFipeValue = null,
        ?float  $downPayment = null,
        ?bool   $used = false
    )
    {
        $this->type = 'FINANCING_AUTO';
        $this->value = $value;
        $this->vehicleBrand = $vehicleBrand;
        $this->vehicleModel = $vehicleModel;
        $this->installments = $installments;
        $this->vehicleModelYear = $vehicleModelYear;
        $this->codeFipe = $codeFipe;
        $this->vehicleFipeValue = $vehicleFipeValue;
        $this->downPayment = $downPayment;
        $this->used = $used;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): ProductFinancingAuto
    {
        $this->value = $value;
        return $this;
    }

    public function getVehicleBrand(): ?string
    {
        return $this->vehicleBrand;
    }

    public function setVehicleBrand(?string $vehicleBrand): ProductFinancingAuto
    {
        $this->vehicleBrand = $vehicleBrand;
        return $this;
    }

    public function getVehicleModel(): ?string
    {
        return $this->vehicleModel;
    }

    public function setVehicleModel(?string $vehicleModel): ProductFinancingAuto
    {
        $this->vehicleModel = $vehicleModel;
        return $this;
    }

    public function getInstallments(): ?int
    {
        return $this->installments;
    }

    public function setInstallments(?int $installments): ProductFinancingAuto
    {
        $this->installments = $installments;
        return $this;
    }

    public function getVehicleModelYear(): ?int
    {
        return $this->vehicleModelYear;
    }

    public function setVehicleModelYear(?int $vehicleModelYear): ProductFinancingAuto
    {
        $this->vehicleModelYear = $vehicleModelYear;
        return $this;
    }

    public function getCodeFipe(): ?string
    {
        return $this->codeFipe;
    }

    public function setCodeFipe(?string $codeFipe): ProductFinancingAuto
    {
        $this->codeFipe = $codeFipe;
        return $this;
    }

    public function getVehicleFipeValue(): ?float
    {
        return $this->vehicleFipeValue;
    }

    public function setVehicleFipeValue(?float $vehicleFipeValue): ProductFinancingAuto
    {
        $this->vehicleFipeValue = $vehicleFipeValue;
        return $this;
    }

    public function getDownPayment(): ?float
    {
        return $this->downPayment;
    }

    public function setDownPayment(?float $downPayment): ProductFinancingAuto
    {
        $this->downPayment = $downPayment;
        return $this;
    }

    public function getUsed(): ?bool
    {
        return $this->used;
    }

    public function setUsed(?bool $used): ProductFinancingAuto
    {
        $this->used = $used;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'type' => $this->type,
            'value' => $this->value,
            'vehicleBrand' => $this->vehicleBrand,
            'vehicleModel' => $this->vehicleModel,
            'installments' => $this->installments,
            'vehicleModelYear' => $this->vehicleModelYear,
            'codeFipe' => $this->codeFipe,
            'vehicleFipeValue' => $this->vehicleFipeValue,
            'downPayment' => $this->downPayment,
            'used' => $this->used,
        ], function ($v) {
            return !is_null($v);
        });
    }
}
