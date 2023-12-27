<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;

use O4l3x4ndr3\SdkEasyCredito\Types\LogData;
use O4l3x4ndr3\SdkEasyCredito\Types\Product;

class Loan extends Product
{
    protected float $value;
    protected int $installments;
    protected ?LogData $logData;

    /**
     * @param float|null $value
     * @param int|null $installments
     * @param LogData|null $logData
     */
    public function __construct(
        ?float             $value,
        ?int               $installments,
        ?LogData    $logData
    ) {
        $this->value = $value;
        parent::__construct(null, "LOAN", $logData);
        $this->installments = $installments;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * @param float $value
     * @return Loan
     */
    public function setValue(float $value): Loan
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstallments(): int
    {
        return $this->installments;
    }

    /**
     * @param int $installments
     * @return Loan
     */
    public function setInstallments(int $installments): Loan
    {
        $this->installments = $installments;
        return $this;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            array_filter([
                'value' => $this->value,
                'installments' => $this->installments
            ], function ($v) {
                return !is_null($v);
            })
        );
    }
}
