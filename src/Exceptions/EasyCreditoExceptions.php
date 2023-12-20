<?php

namespace O4l3x4ndr3\SdkEasyCredito\Errors;

use GuzzleHttp\Exception\GuzzleException;

class EasyCreditoExceptions extends GuzzleException
{
    public function __construct($message = '', $code = 0, GuzzleException $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
