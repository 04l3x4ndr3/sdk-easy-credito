<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Document
{
    private ?string $identityType;
    private ?string $number;
    private ?string $issuer;
    private ?string $state;
    private ?string $issuingDate;

    public function __construct(
        ?string $identityType = null,
        ?string $number = null,
        ?string $issuer = null,
        ?string $state = null,
        ?string $issuingDate = null
    )
    {
        $this->identityType = $identityType;
        $this->number = $number;
        $this->issuer = $issuer;
        $this->state = $state;
        $this->issuingDate = $issuingDate;
    }

    public function getIdentityType(): string
    {
        return $this->identityType;
    }

    public function setIdentityType(?string $identityType): Document
    {
        $this->identityType = $identityType;
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): Document
    {
        $this->number = $number;
        return $this;
    }

    public function getIssuer(): string
    {
        return $this->issuer;
    }

    public function setIssuer(?string $issuer): Document
    {
        $this->issuer = $issuer;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(?string $state): Document
    {
        $this->state = $state;
        return $this;
    }

    public function getIssuingDate(): string
    {
        return $this->issuingDate;
    }

    public function setIssuingDate(?string $issuingDate): Document
    {
        $this->issuingDate = $issuingDate;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            'type' => $this->identityType,
            'number' => $this->number,
            'issuer' => $this->issuer,
            'state' => $this->state,
            'issuingDate' => $this->issuingDate
        ], function ($v) {
            return !is_null($v);
        });
    }
}