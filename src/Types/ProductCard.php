<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class ProductCard extends Product
{
    private ?string $network;
    private ?int $payday;

    public function __construct(
        ?string $network = null,
        ?int    $payday = null,
    )
    {
        parent::__construct('CARD');

        $this->network = $network;
        $this->payday = $payday;
    }

    public function getNetwork(): string
    {
        return $this->network;
    }

    public function setNetwork(string $network): ProductCard
    {
        $this->network = $network;
        return $this;
    }

    public function getPayday(): int
    {
        return $this->payday;
    }

    public function setPayday(int $payday): ProductCard
    {
        $this->payday = $payday;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'type' => $this->type,
            'network' => $this->network,
            'payDay' => $this->payday
        ], function ($v) {
            return !is_null($v);
        });
    }
}
