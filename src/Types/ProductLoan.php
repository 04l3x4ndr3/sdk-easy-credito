<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductLoan implements Product
{
    private string $type;
    private float $value;
    private int $installments;

    public function __construct(?float $value = null, ?int $installments = null)
    {
        $this->type = 'LOAN';
        $this->value = $value;
        $this->installments = $installments;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): ProductLoan
    {
        $this->value = $value;
        return $this;
    }

    public function getInstallments(): int
    {
        return $this->installments;
    }

    public function setInstallments(int $installments): ProductLoan
    {
        $this->installments = $installments;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'type' => $this->type,
            'value' => $this->value,
            'installments' => $this->installments
        ], function ($v) {
            return !is_null($v);
        });
    }
}
