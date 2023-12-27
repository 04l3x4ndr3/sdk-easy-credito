<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

/**
 * Modelo de Documento
 */
class Document
{
    protected ?string $identityType;
    protected ?string $number;
    protected ?string $issuer;
    protected ?string $state;
    protected ?string $issuingDate;

    /**
     * @param string|null $identityType
     * @param string|null $number
     * @param string|null $issuer
     * @param string|null $state
     * @param string|null $issuingDate
     */
    public function __construct(?string $identityType, ?string $number, ?string $issuer, ?string $state, ?string $issuingDate)
    {
        $this->identityType = $identityType;
        $this->number = $number;
        $this->issuer = $issuer;
        $this->state = $state;
        $this->issuingDate = $issuingDate;
    }

    /**
     * @return string
     */
    public function getIdentityType(): string
    {
        return $this->identityType;
    }

    /**
     * @param string $identityType
     * @return Document
     */
    public function setIdentityType(string $identityType): Document
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
     * @return string
     */
    public function getIssuer(): string
    {
        return $this->issuer;
    }

    /**
     * @param string $issuer
     * @return Document
     */
    public function setIssuer(string $issuer): Document
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return Document
     */
    public function setState(string $state): Document
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