<?php
namespace O4l3x4ndr3\SdkEasyCredito\Contexts;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Exceptions\EasyCreditoException;
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
     */
    public function get(?string $customerServiceNumber): object
    {
        try {
            return $this->call('GET', '/v2.1/contract/' . $customerServiceNumber);
        } catch (GuzzleException|EasyCreditoException $e) {
            return $e;
        }
    }

    /**
     * @throws EasyCreditoException
     * @throws GuzzleException
     */
    public function post(?\O4l3x4ndr3\SdkEasyCredito\Types\Contract $contract, ?string $customerServiceNumber): object
    {
        $acceptedContract = [
            'aceptedCheckSum' => $contract->getChecksum(),
            'logData' => $contract->getLogData()
        ];
        return $this->call('POST', '/v2/process/document/'.$customerServiceNumber, $acceptedContract);
    }

    public function toArray(): array
    {
        return [

        ];
    }
}
