<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ConsumerUnit
{
    protected ?string $number;

    public function __construct(?string $number = null)
    {
        $this->number = $number;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): ConsumerUnit
    {
        $this->number = $number;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'number' => $this->number
        ], function ($v) {
            return !is_null($v);
        });
    }
}