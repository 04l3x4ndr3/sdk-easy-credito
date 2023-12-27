<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

/**
 * Modelo de Contrato
 */
class Contract
{
    protected string $checksum;
    protected string $contract;
    protected ?LogData $logData;

    /**
     * @param string|null $checksum
     * @param string|null $contract
     * @param LogData|null $logData
     */
    public function __construct(
        ?string $checksum,
        ?string $contract,
        ?LogData $logData
    ) {
        $this->checksum = $checksum;
        $this->contract = $contract;
        $this->logData = $logData;
    }

    /**
     * @return string
     */
    public function getChecksum(): string
    {
        return $this->checksum;
    }

    /**
     * @param string $checksum
     * @return Contract
     */
    public function setChecksum(string $checksum): Contract
    {
        $this->checksum = $checksum;
        return $this;
    }

    /**
     * @return string
     */
    public function getContract(): string
    {
        return $this->contract;
    }

    /**
     * @param string $contract
     * @return Contract
     */
    public function setContract(string $contract): Contract
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * @return LogData|null
     */
    public function getLogData(): ?LogData
    {
        return $this->logData;
    }

    /**
     * @param LogData|null $logData
     * @return Contract
     */
    public function setLogData(?LogData $logData): Contract
    {
        $this->logData = $logData;
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
            'checksum' => $this->checksum,
            'contract' => $this->contract,
            'logData' => $this->logData->toArray()
        ], function ($v) {
            return ! is_null($v);
        });
    }
}