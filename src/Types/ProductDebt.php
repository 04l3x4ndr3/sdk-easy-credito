<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductDebt implements Product
{
    private ?string $type;

    public function __construct()
    {
        $this->type = "DEBT";
    }

    public function getType(): ?string
    {
        return $this->type;
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
