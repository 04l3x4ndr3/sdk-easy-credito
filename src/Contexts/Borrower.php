<?php

namespace O4l3x4ndr3\SdkEasyCredito\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Exceptions\EasyCreditoException;
use O4l3x4ndr3\SdkEasyCredito\Helpers\CallApi;
class Borrower extends CallApi
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
     * @throws GuzzleException|EasyCreditoException
     */
    public function get(?string $cpf = null): object
    {
        return $this->call('GET', '/v2/borrower?cpf=' . $cpf);
    }
}
