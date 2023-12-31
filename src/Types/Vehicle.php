<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Carro na tabela FIPE
 */
class Vehicle
{
    protected string $vehicleBrand;
    protected string $vehicleModel;
    protected string $codeFipe;
    protected float $vehicleFipeValue;
    protected int $vehicleYear;

    /**
     * @param string $vehicleBrand
     * @param string $vehicleModel
     * @param string $codeFipe
     * @param float $vehicleFipeValue
     * @param int $vehicleYear
     */
    public function __construct(string $vehicleBrand, string $vehicleModel, string $codeFipe, float $vehicleFipeValue, int $vehicleYear)
    {
        $this->vehicleBrand = $vehicleBrand;
        $this->vehicleModel = $vehicleModel;
        $this->codeFipe = $codeFipe;
        $this->vehicleFipeValue = $vehicleFipeValue;
        $this->vehicleYear = $vehicleYear;
    }
    /**
     * Parse props to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            'vehicleBrand' => $this->vehicleBrand,
            'vehicleModel' => $this->vehicleModel,
            'codeFipe' => $this->codeFipe,
            'vehicleFipeValue' => $this->vehicleFipeValue,
            'vehicleYear' => $this->vehicleYear
        ], function ($v) {
            return ! is_null($v);
        });
    }
}