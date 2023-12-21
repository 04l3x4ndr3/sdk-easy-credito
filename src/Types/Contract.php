<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

use O4l3x4ndr3\SdkEasyCredito\Enum\DocumentType;
use O4l3x4ndr3\SdkEasyCredito\Enum\MIMEType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\LogData;

/**
 * Modelo de Contrato
 */
class Contract implements LogData
{
    protected string $checksum;
    protected string $contract;

    /**
     * @param string|null $checksum
     * @param string|null $contract
     */
    public function __construct(
        ?string $checksum,
        ?string $contract
    ) {
        $this->checksum = $checksum;
        $this->contract = $contract;
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
    public function getLogData() : array
    {
        return [
            "latitude" => -16.6982283,
            "longitude" => -49.2581201,
            "occurrenceDate" => date("c"),
            "userAgent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36",
            "ip" => "0.0.0.0",
            "mac" => "00:00:00:00:00:00"
        ];
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
            'contract' => $this->contract
        ], function ($v) {
            return ! is_null($v);
        });
    }
}