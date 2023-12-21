<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Unidade de Consumo
 */
class ConsumerUnit
{
    protected int $number;

    /**
     * @param int|null $number
     */
    public function __construct(?int $number)
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return Document
     */
    public function setNumber(int $number): ConsumerUnit
    {
        $this->number = $number;
        return $this;
    }
    /**
     * Parse props to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            'number' => $this->number
        ], function ($v) {
            return ! is_null($v);
        });
    }
}