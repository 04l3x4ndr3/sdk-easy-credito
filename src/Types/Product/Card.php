<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\Product;
use O4l3x4ndr3\SdkEasyCredito\Types\LogData;
use O4l3x4ndr3\SdkEasyCredito\Types\Product;
class Card extends Product
{
    protected string $network;
    protected int $payday;
    protected ?LogData $logData;

    /**
     * @param string|null $network
     * @param int|null $payday
     * @param LogData|null $logData
     */
    public function __construct(
        ?string           $network,
        ?int               $payday,
        ?LogData    $logData
    ) {
        parent::__construct(null, "CARD", $logData);
        $this->network = $network;
        $this->payday = $payday;
    }

    /**
     * @return string
     */
    public function getNetwork(): string
    {
        return $this->network;
    }

    /**
     * @param string $network
     * @return Card
     */
    public function setNetwork(string $network): Card
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

    public function toArray(): ?array
    {
        return array_merge(
            parent::toArray(),
            array_filter([
                'network' => $this->network,
                'payDay' => $this->payday
            ], function ($v) {
                return !is_null($v);
            })
        );
    }
}
