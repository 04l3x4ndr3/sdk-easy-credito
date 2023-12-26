<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;
use O4l3x4ndr3\SdkEasyCredito\Types\Product;

class FinancingAuto extends Product
{
    protected RefinancingAuto $refinancingAuto;
    protected float $downPayment;
    protected bool $used;
    public function __construct(
        ?RefinancingAuto $refinancingAuto,
        ?float $downPayment,
        ?bool $used
    ) {
        parent::__construct(null, "FINANCING_AUTO");
        $this->refinancingAuto = $refinancingAuto;
        $this->downPayment = $downPayment;
        $this->used = $used;
    }

    /**
     * @return RefinancingAuto
     */
    public function getRefinancingAuto(): RefinancingAuto
    {
        return $this->refinancingAuto;
    }

    /**
     * @param RefinancingAuto $refinancingAuto
     * @return FinancingAuto
     */
    public function setRefinancingAuto(RefinancingAuto $refinancingAuto): FinancingAuto
    {
        $this->refinancingAuto = $refinancingAuto;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownPayment(): float
    {
        return $this->downPayment;
    }

    /**
     * @param float $downPayment
     * @return FinancingAuto
     */
    public function setDownPayment(float $downPayment): FinancingAuto
    {
        $this->downPayment = $downPayment;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUsed(): bool
    {
        return $this->used;
    }

    /**
     * @param bool $used
     * @return FinancingAuto
     */
    public function setUsed(bool $used): FinancingAuto
    {
        $this->used = $used;
        return $this;
    }
    public function toArray(): array
    {
        return array_merge(
            $this->refinancingAuto->toArray(),
            array_filter([
                'downPayment' => $this->downPayment,
                'used' => $this->used
            ], function ($v) {
                return !is_null($v);
            })
        );
    }
}
