<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Vehicle
{
    private ?string $vehicleBrand;
    private ?string $vehicleModel;
    private ?string $codeFipe;
    private ?float $vehicleFipeValue;
    private ?int $vehicleYear;

    public function __construct(
        ?string $vehicleBrand = null,
        ?string $vehicleModel = null,
        ?string $codeFipe = null,
        ?float  $vehicleFipeValue = null,
        ?int    $vehicleYear = null
    )
    {
        $this->vehicleBrand = $vehicleBrand;
        $this->vehicleModel = $vehicleModel;
        $this->codeFipe = $codeFipe;
        $this->vehicleFipeValue = $vehicleFipeValue;
        $this->vehicleYear = $vehicleYear;
    }

    public function getVehicleBrand(): ?string
    {
        return $this->vehicleBrand;
    }

    public function setVehicleBrand(?string $vehicleBrand): Vehicle
    {
        $this->vehicleBrand = $vehicleBrand;
        return $this;
    }

    public function getVehicleModel(): ?string
    {
        return $this->vehicleModel;
    }

    public function setVehicleModel(?string $vehicleModel): Vehicle
    {
        $this->vehicleModel = $vehicleModel;
        return $this;
    }

    public function getCodeFipe(): ?string
    {
        return $this->codeFipe;
    }

    public function setCodeFipe(?string $codeFipe): Vehicle
    {
        $this->codeFipe = $codeFipe;
        return $this;
    }

    public function getVehicleFipeValue(): ?float
    {
        return $this->vehicleFipeValue;
    }

    public function setVehicleFipeValue(?float $vehicleFipeValue): Vehicle
    {
        $this->vehicleFipeValue = $vehicleFipeValue;
        return $this;
    }

    public function getVehicleYear(): ?int
    {
        return $this->vehicleYear;
    }

    public function setVehicleYear(?int $vehicleYear): Vehicle
    {
        $this->vehicleYear = $vehicleYear;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'vehicleBrand' => $this->vehicleBrand,
            'vehicleModel' => $this->vehicleModel,
            'codeFipe' => $this->codeFipe,
            'vehicleFipeValue' => $this->vehicleFipeValue,
            'vehicleModelYear' => $this->vehicleYear
        ], function ($v) {
            return !is_null($v);
        });
    }
}