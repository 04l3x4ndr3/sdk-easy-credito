<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Product
{
    protected ?string $type;

    public function __construct(?string $type)
    {
        $this->type = $type;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}