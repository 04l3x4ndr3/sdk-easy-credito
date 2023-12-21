<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Carro na tabela FIPE
 */
class ProposalVehicle
{
    protected string $licensePlate;

    /**
     * @param string $licensePlate
     */
    public function __construct(string $licensePlate)
    {
        $this->licensePlate = $licensePlate;
    }

    /**
     * @return string
     */
    public function getLicensePlate(): string
    {
        return $this->licensePlate;
    }

    /**
     * @param string $licensePlate
     * @return ProposalVehicle
     */
    public function setLicensePlate(string $licensePlate): ProposalVehicle
    {
        $this->licensePlate = $licensePlate;
        return $this;
    }
    /**
     * Parse props to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            'licensePlate' => $this->licensePlate
        ], function ($v) {
            return ! is_null($v);
        });
    }
}