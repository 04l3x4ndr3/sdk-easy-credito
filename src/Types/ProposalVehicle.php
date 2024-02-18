<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProposalVehicle
{
    private ?string $licensePlate;

    public function __construct(?string $licensePlate = null)
    {
        $this->licensePlate = $licensePlate;
    }

    public function getLicensePlate(): ?string
    {
        return $this->licensePlate;
    }

    public function setLicensePlate(?string $licensePlate): ProposalVehicle
    {
        $this->licensePlate = $licensePlate;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'licensePlate' => $this->licensePlate
        ], function ($v) {
            return !is_null($v);
        });
    }
}