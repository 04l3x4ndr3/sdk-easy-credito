<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductDebt extends Product
{
    public function __construct()
    {
        parent::__construct('DEBT');
    }

    public function toArray(): ?array
    {
        return array_filter([
            "type" => $this->type
        ], function ($v) {
            return !is_null($v);
        });
    }
}
