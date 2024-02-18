<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Contract
{
    private ?string $aceptedCheckSum;
    private ?string $contract;
    private ?LogData $logData;

    public function __construct(
        ?string  $checksum = null,
        ?string  $contract = null,
        ?LogData $logData = null
    )
    {
        $this->aceptedCheckSum = $checksum;
        $this->contract = $contract;
        $this->logData = $logData;
    }

    public function getAceptedCheckSum(): string
    {
        return $this->aceptedCheckSum;
    }

    public function setAceptedCheckSum(string $aceptedCheckSum): Contract
    {
        $this->aceptedCheckSum = $aceptedCheckSum;
        return $this;
    }

    public function getContract(): string
    {
        return $this->contract;
    }

    public function setContract(string $contract): Contract
    {
        $this->contract = $contract;
        return $this;
    }

    public function getLogData(): ?LogData
    {
        return $this->logData;
    }

    public function setLogData(?LogData $logData): Contract
    {
        $this->logData = $logData;
        return $this;
    }

    public function toArray(): ?array
    {
        $arrLogData = isset($this->logData) ? $this->logData->toArray() : null;

        return array_filter([
            'checksum' => $this->aceptedCheckSum,
            'contract' => $this->contract,
            'logData' => $arrLogData
        ], function ($v) {
            return !is_null($v);
        });
    }
}