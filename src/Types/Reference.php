<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Reference
{
    private ?string $name;
    private ?int $phone;

    public function __construct(?string $name = null, ?int $phone = null)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Reference
    {
        $this->name = $name;
        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(?int $phone): Reference
    {
        $this->phone = $phone;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'name' => $this->name,
            'phone' => $this->phone
        ], function ($v) {
            return !is_null($v);
        });
    }
}