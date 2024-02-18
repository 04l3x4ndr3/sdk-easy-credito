<?php

namespace O4l3x4ndr3\SdkEasyCredito\Exceptions;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Helpers\CallApi;

class Borrower extends CallApi
{
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    public function get(?string $cpf = null): object
    {
        return $this->call('GET', '/v2/borrower?cpf=' . $cpf);
    }
}
