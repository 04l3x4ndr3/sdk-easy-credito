<?php

namespace O4l3x4ndr3\SdkEasyCredito\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Helpers\CallApi;
use O4l3x4ndr3\SdkEasyCredito\Types\Contract as ContractType;

class Contract extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * Public Methods
     * @throws GuzzleException
     */
    public function getToSign(?string $customerServiceNumber): object
    {
        return $this->call('GET', '/v2.1/contract/' . $customerServiceNumber);
    }

    /**
     * @throws GuzzleException
     */
    public function sign(?ContractType $contract, ?string $customerServiceNumber): object
    {
        $logData = !empty($contract->getLogData()) ? $contract->getLogData()->toArray() : null;
        $acceptedContract = [
            'aceptedCheckSum' => $contract->getAceptedCheckSum(),
            'logData' => $logData
        ];
        return $this->call('POST', '/v2.1/contract/' . $customerServiceNumber, $acceptedContract);
    }
}
