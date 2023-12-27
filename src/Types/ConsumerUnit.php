<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Unidade de Consumo
 */
class ConsumerUnit
{
    protected ?string $number;

    /**
     * @param string|null $number
     */
    public function __construct(?string $number)
    {
        $this->number = $number;
    }

    /**
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param string|null $number
     * @return ConsumerUnit
     */
    public function setNumber(?string $number): ConsumerUnit
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