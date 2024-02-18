<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Bank
{
    protected ?string $bank;
    protected ?string $type;
    protected ?string $agency;
    protected ?string $account;

    public function __construct(
        ?string $bank = null,
        ?string $type = null,
        ?string $agency = null,
        ?string $account = null
    ) {
        $this->bank = $bank;
        $this->type = $type;
        $this->agency = $agency;
        $this->account = $account;
    }

    public function getBank(): string
    {
        return $this->bank;
    }

    public function setBank(?string $bank): Bank
    {
        $this->bank = $bank;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(?string $type): Bank
    {
        $this->type = $type;
        return $this;
    }

    public function getAgency(): string
    {
        return $this->agency;
    }

    public function setAgency(?string $agency): Bank
    {
        $this->agency = $agency;
        return $this;
    }

    public function getAccount(): string
    {
        return $this->account;
    }

    public function setAccount(?string $account): Bank
    {
        $this->account = $account;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'bank' => $this->bank,
            'type' => $this->type,
            'agency' => $this->agency,
            'account' => $this->account
        ], function ($v) {
            return ! is_null($v);
        });
    }
}