<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

use O4l3x4ndr3\SdkEasyCredito\Helpers\LogData;

/**
 * @implements LogData
 * Classe Modelo de um produto que compõe propostas ENVIADAS, recebendo este nome porque na documentação é enviado um array com nome products
 * O Produto do tipo DEBT não possue especialização já que possui somente o atributo ProductTypestring
 */
class Product implements LogData
{
    protected ?int $customerServiceNumber;
    protected ?string $typestring;

    /**
     * @param int|null $customerServiceNumber
     * @param string|null $typestring
     */
    public function __construct(
        ?int $customerServiceNumber,
        ?string $typestring
    ) {
        $this->customerServiceNumber = $customerServiceNumber;
        $this->typestring = $typestring;
    }

    /**
     * @return string
     */
    public function getTypestring(): string
    {
        return $this->typestring;
    }

    /**
     * @param string $typestring
     * @return Product
     */
    public function setTypestring(string $typestring): Product
    {
        $this->typestring = $typestring;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomerServiceNumber(): int
    {
        return $this->customerServiceNumber;
    }

    /**
     * @param int $customerServiceNumber
     * @return Product
     */
    public function setCustomerServiceNumber(int $customerServiceNumber): Product
    {
        $this->customerServiceNumber = $customerServiceNumber;
        return $this;
    }
    public function getLogData() : array
    {
        return [
            "latitude" => "",
            "longitude" => "",
            "occurrenceDate" => "",
            "userAgent" => "",
            "ip" => "",
            "mac" => ""
        ];
    }

    public function toArray(): array
    {
        if(isset($this->customerServiceNumber)) {
            return array_filter([
                'customerServiceNumber' => $this->customerServiceNumber,
                'type' => $this->typestring
            ], function ($v) {
                return ! is_null($v);
            });
        }

        return array_filter([
            'type' => $this->typestring
        ], function ($v) {
            return ! is_null($v);
        });
    }
}
