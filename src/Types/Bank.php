<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Conta de Banco
 */
class Bank
{
    protected ?string $bank;
    protected ?string $type;
    protected ?string $agency;
    protected ?string $account;

    /**
     * @param ?string $bank
     * @param ?string $type
     * @param ?string $agency
     * @param ?string $account
     */
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

    /**
     * @return string
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * @param ?string $bank
     * @return Bank
     */
    public function setBank(?string $bank): Bank
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Bank
     */
    public function setType(?string $type): Bank
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgency(): string
    {
        return $this->agency;
    }

    /**
     * @param string $agency
     * @return Bank
     */
    public function setAgency(?string $agency): Bank
    {
        $this->agency = $agency;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccount(): string
    {
        return $this->account;
    }

    /**
     * @param string $account
     * @return Bank
     */
    public function setAccount(?string $account): Bank
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Parse props to array
     *
     * @return array|null
     */
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