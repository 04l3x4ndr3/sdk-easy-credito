<?php

namespace O4l3x4ndr3\SdkEasyCredito\Contexts;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Helpers\CallApi;
class FIPE extends CallApi
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
    public function get(bool $dateOnly = false): object
    {
        if($dateOnly) {
            return $this->call('GET', '/v2/fipe?dateOnly=true');
        }
        return $this->call('GET', '/v2/fipe');
    }
}
