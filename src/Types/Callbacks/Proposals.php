<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Callbacks;

class Proposals extends ProductProposal
{
    private float $value;
    private int $installments;
    private float $installmentValue;
    private float $monthlyTax;
    private float $iofValue;
    private float $grossValue;
    private string $firstPaymentDate;
    private float $cet;
    private string $releaseDate;

    public function __construct(
        ?string $typeString,
        ?int $customerServiceNumber,
        ?string $product,
        ?int $productId,
        ?bool $hasDocuments,
        ?bool $hasContract,
        ?string $lastStatus,
        ?string $logo,
        ?string $dateCreated,
        ?string $lastUpdated,
        ?float $value,
        ?int $installments,
        ?float $monthlyTax,
        ?float $installmentValue,
        ?float $iofValue,
        ?float $grossValue,
        ?string $firstPaymentDate,
        ?float $cet,
        ?string $releaseDate
    ) {
        parent::__construct(
            $typeString,
            $customerServiceNumber,
            $product,
            $productId,
            $hasDocuments,
            $hasContract,
            $lastStatus,
            $logo,
            $dateCreated,
            $lastUpdated
        );
        $this->value = $value;
        $this->installments = $installments;
        $this->installmentValue = $installmentValue;
        $this->monthlyTax = $monthlyTax;
        $this->iofValue = $iofValue;
        $this->grossValue = $grossValue;
        $this->firstPaymentDate = $firstPaymentDate;
        $this->cet = $cet;
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return float
     */
    public function getInstallmentValue(): float
    {
        return $this->installmentValue;
    }

    /**
     * @param float $installmentValue
     * @return Proposals
     */
    public function setInstallmentValue(float $installmentValue): Proposals
    {
        $this->installmentValue = $installmentValue;
        return $this;
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
     * @return Proposals
     */
    public function setValue(float $value): Proposals
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
     * @return Proposals
     */
    public function setInstallments(int $installments): Proposals
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonthlyTax(): float
    {
        return $this->monthlyTax;
    }

    /**
     * @param float $monthlyTax
     * @return Proposals
     */
    public function setMonthlyTax(float $monthlyTax): Proposals
    {
        $this->monthlyTax = $monthlyTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getIofValue(): float
    {
        return $this->iofValue;
    }

    /**
     * @param float $iofValue
     * @return Proposals
     */
    public function setIofValue(float $iofValue): Proposals
    {
        $this->iofValue = $iofValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossValue(): float
    {
        return $this->grossValue;
    }

    /**
     * @param float $grossValue
     * @return Proposals
     */
    public function setGrossValue(float $grossValue): Proposals
    {
        $this->grossValue = $grossValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstPaymentDate(): string
    {
        return $this->firstPaymentDate;
    }

    /**
     * @param string $firstPaymentDate
     * @return Proposals
     */
    public function setFirstPaymentDate(string $firstPaymentDate): Proposals
    {
        $this->firstPaymentDate = $firstPaymentDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCet(): float
    {
        return $this->cet;
    }

    /**
     * @param float $cet
     * @return Proposals
     */
    public function setCet(float $cet): Proposals
    {
        $this->cet = $cet;
        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     * @return Proposals
     */
    public function setReleaseDate(string $releaseDate): Proposals
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * Parse props to array
     *
     * @return array|null
     */
    public function toArray(): ?array
    {
        return array_merge(
            parent::toArray(),
            array_filter([
                'value' => $this->value,
                'installments' => $this->installments,
                'monthlyTax' => $this->monthlyTax,
                'installmentValue' => $this->installmentValue,
                'iofValue' => $this->iofValue,
                'grossValue' => $this->grossValue,
                'firstPaymentDate' => $this->firstPaymentDate,
                'cet' => $this->cet,
                'releaseDate' => $this->releaseDate
            ], function ($v) {
                return ! is_null($v);
            })
        );
    }
}