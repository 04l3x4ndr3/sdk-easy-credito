<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityType;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\IdentityIssuer;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\States;

/**
 * Modelo de Documento
 */
class Document
{
    protected IdentityType $identityType;
    protected ?string $number;
    protected IdentityIssuer $issuer;
    protected States $state;
    protected string $issuingDate;

    /**
     * @param IdentityType $identityType
     * @param ?string $number
     * @param IdentityIssuer $issuer
     * @param States $state
     * @param string $issuingDate
     */
    public function __construct(IdentityType $identityType, ?string $number, IdentityIssuer $issuer, States $state, string $issuingDate)
    {
        $this->identityType = $identityType;
        $this->number = $number;
        $this->issuer = $issuer;
        $this->state = $state;
        $this->issuingDate = $issuingDate;
    }

    /**
     * @return IdentityType
     */
    public function getIdentityType(): IdentityType
    {
        return $this->identityType;
    }

    /**
     * @param IdentityType $identityType
     * @return Document
     */
    public function setIdentityType(IdentityType $identityType): Document
    {
        $this->identityType = $identityType;
        return $this;
    }

    /**
     * @return ?string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param ?string $number
     * @return Document
     */
    public function setNumber(?string $number): Document
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return IdentityIssuer
     */
    public function getIssuer(): IdentityIssuer
    {
        return $this->issuer;
    }

    /**
     * @param IdentityIssuer $issuer
     * @return Document
     */
    public function setIssuer(IdentityIssuer $issuer): Document
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return States
     */
    public function getState(): States
    {
        return $this->state;
    }

    /**
     * @param States $state
     * @return Document
     */
    public function setState(States $state): Document
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuingDate(): string
    {
        return $this->issuingDate;
    }

    /**
     * @param string $issuingDate
     * @return Document
     */
    public function setIssuingDate(string $issuingDate): Document
    {
        $this->issuingDate = $issuingDate;
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
            'type' => $this->identityType,
            'number' => $this->number,
            'issuer' => $this->issuer,
            'state' => $this->state,
            'issuingDate' => $this->issuingDate
        ], function ($v) {
            return ! is_null($v);
        });
    }
}