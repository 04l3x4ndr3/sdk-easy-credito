<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Contract
{
    private ?array $acceptedCheckSum;
    private ?LogData $logData;

    public function __construct(
        ?string  $acceptedCheckSum = null,
        ?LogData $logData = null
    )
    {
        $this->acceptedCheckSum = $acceptedCheckSum;
        $this->logData = $logData;
    }

    public function getAcceptedCheckSum(): ?array
    {
        return $this->acceptedCheckSum;
    }

    public function addAcceptedCheckSum(string $acceptedCheckSum): Contract
    {
        $this->acceptedCheckSum[] = $acceptedCheckSum;
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
            'aceptedCheckSum' => $this->acceptedCheckSum,
            'logData' => $arrLogData
        ], function ($v) {
            return !is_null($v);
        });
    }
}