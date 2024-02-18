<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductAuto implements Product
{
    private ?string $type;
    private ?float $value;
    private ?int $installments;
    private ?string $vehicleBrand;
    private ?string $vehicleModel;
    private ?int $vehicleModelYear;
    private ?string $codeFipe;
    private ?float $vehicleFipeValue;

    public function __construct(
        ?float  $value = null,
        ?int    $installments = null,
        ?string $vehicleBrand = null,
        ?string $vehicleModel = null,
        ?int    $vehicleModelYear = null,
        ?string $codeFipe = null,
        ?float  $vehicleFipeValue = null)
    {
        $this->type = "REFINANCING_AUTO";
        $this->value = $value;
        $this->installments = $installments;
        $this->vehicleBrand = $vehicleBrand;
        $this->vehicleModel = $vehicleModel;
        $this->vehicleModelYear = $vehicleModelYear;
        $this->codeFipe = $codeFipe;
        $this->vehicleFipeValue = $vehicleFipeValue;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): ProductAuto
    {
        $this->value = $value;
        return $this;
    }

    public function getInstallments(): ?int
    {
        return $this->installments;
    }

    public function setInstallments(?int $installments): ProductAuto
    {
        $this->installments = $installments;
        return $this;
    }

    public function getVehicleBrand(): ?string
    {
        return $this->vehicleBrand;
    }

    public function setVehicleBrand(?string $vehicleBrand): ProductAuto
    {
        $this->vehicleBrand = $vehicleBrand;
        return $this;
    }

    public function getVehicleModel(): ?string
    {
        return $this->vehicleModel;
    }

    public function setVehicleModel(?string $vehicleModel): ProductAuto
    {
        $this->vehicleModel = $vehicleModel;
        return $this;
    }

    public function getVehicleModelYear(): ?int
    {
        return $this->vehicleModelYear;
    }

    public function setVehicleModelYear(?int $vehicleModelYear): ProductAuto
    {
        $this->vehicleModelYear = $vehicleModelYear;
        return $this;
    }

    public function getCodeFipe(): ?string
    {
        return $this->codeFipe;
    }

    public function setCodeFipe(?string $codeFipe): ProductAuto
    {
        $this->codeFipe = $codeFipe;
        return $this;
    }

    public function getVehicleFipeValue(): ?float
    {
        return $this->vehicleFipeValue;
    }

    public function setVehicleFipeValue(?float $vehicleFipeValue): ProductAuto
    {
        $this->vehicleFipeValue = $vehicleFipeValue;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            "value" => $this->value,
            "installments" => $this->installments,
            "vehicleBrand" => $this->vehicleBrand,
            "vehicleModel" => $this->vehicleModel,
            "vehicleModelYear" => $this->vehicleModelYear,
            "codeFipe" => $this->codeFipe,
            "vehicleFipeValue" => $this->vehicleFipeValue,
        ], function ($v) {
            return !is_null($v);
        });
    }
}
