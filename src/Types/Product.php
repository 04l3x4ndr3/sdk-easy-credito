<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

/**
 * Classe Modelo de um produto que compõe propostas ENVIADAS, recebendo este nome porque na documentação é enviado um array com nome products
 * O Produto do tipo DEBT não possue especialização já que possui somente o atributo ProductTypestring
 */
class Product
{
    protected ?int $customerServiceNumber;
    protected ?string $typestring;
    protected ?LogData $logData;

    /**
     * @param int|null $customerServiceNumber
     * @param string|null $typestring
     * @param LogData|null $logData
     */
    public function __construct(
        ?int $customerServiceNumber,
        ?string $typestring,
        ?LogData $logData
    ) {
        $this->customerServiceNumber = $customerServiceNumber;
        $this->typestring = $typestring;
        $this->logData = $logData;
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

    /**
     * @return LogData|null
     */
    public function getLogData(): ?LogData
    {
        return $this->logData;
    }

    /**
     * @param LogData|null $logData
     * @return Product
     */
    public function setLogData(?LogData $logData): Product
    {
        $this->logData = $logData;
        return $this;
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
