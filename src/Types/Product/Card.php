<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;

use O4l3x4ndr3\SdkEasyCredito\Types\Product;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Network;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;

class Card extends Product
{
    protected Network $network;
    protected int $payday;

    /**
     * @param ProductTypestring|null $typestring
     * @param Network|null $network
     * @param int|null $payday
     */
    public function __construct(
        ?ProductTypestring $typestring,
        ?Network           $network,
        ?int               $payday
    ) {
        parent::__construct($typestring);
        $this->network = $network;
        $this->payday = $payday;
    }

    /**
     * @return Network
     */
    public function getNetwork(): Network
    {
        return $this->network;
    }

    /**
     * @param Network $network
     * @return Card
     */
    public function setNetwork(Network $network): Card
    {
        $this->network = $network;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayday(): int
    {
        return $this->payday;
    }

    /**
     * @param int $payday
     * @return Card
     */
    public function setPayday(int $payday): Card
    {
        $this->payday = $payday;
        return $this;
    }

    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            array_filter([
                'typestring' => $this->typestring
            ], function ($v) {
                return !is_null($v);
            })
        );
    }
}
