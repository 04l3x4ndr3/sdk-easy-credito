<?php

namespace O4l3x4ndr3\SdkEasyCredito\Contexts;

use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Helpers\CallApi;

class Sample extends CallApi
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

    public function sample(int $appointmentId = null): object
    {
        return $this->call('', '');
    }

    public function toArray(): array
    {
        return [

        ];
    }
}
