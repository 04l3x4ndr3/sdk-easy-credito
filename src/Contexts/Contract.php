<?php

namespace O4l3x4ndr3\SdkEasyCredito\Contexts;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Helpers\CallApi;
class Contract extends CallApi
{
    /**
     * Properties list
     */

    /**
     * Construct method
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * Public Methods
     * @throws GuzzleException
     */
    public function get(?string $customerServiceNumber): object
    {
        return $this->call('GET', '/v2.1/contract/' . $customerServiceNumber);
    }

    /**
     * @throws GuzzleException
     */
    public function post(?\O4l3x4ndr3\SdkEasyCredito\Types\Contract $contract, ?string $customerServiceNumber): object
    {
        $acceptedContract = [
            'aceptedCheckSum' => $contract->getChecksum(),
            'logData' => $contract->getLogData()
        ];
        return $this->call('POST', '/v2.1/contract/'.$customerServiceNumber, $acceptedContract);
    }
}
