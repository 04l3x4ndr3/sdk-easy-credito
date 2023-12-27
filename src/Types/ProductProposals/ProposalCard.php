<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals;
use O4l3x4ndr3\SdkEasyCredito\Types\ProductProposal;
class ProposalCard extends ProductProposal
{
    private bool $international;
    private float $annuity;
    private string $network;
    private bool $prepaid;
    private bool $digitalAccount;

    public function __construct(
        ?int $customerServiceNumber,
        ?string $product,
        ?int $productId,
        ?bool $hasDocuments,
        ?bool $hasContract,
        ?string $lastStatus,
        ?string $logo,
        ?string $dateCreated,
        ?string $lastUpdated,
        ?bool $international,
        ?float $annuity,
        ?string $network,
        ?bool $prepaid,
        ?bool $digitalAccount
    ) {
        parent::__construct(
            "CARD",
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
        $this->international = $international;
        $this->annuity = $annuity;
        $this->network = $network;
        $this->prepaid = $prepaid;
        $this->digitalAccount = $digitalAccount;
    }

    /**
     * @return bool
     */
    public function isInternational(): bool
    {
        return $this->international;
    }

    /**
     * @param bool $international
     * @return ProposalCard
     */
    public function setInternational(bool $international): ProposalCard
    {
        $this->international = $international;
        return $this;
    }

    /**
     * @return float
     */
    public function getAnnuity(): float
    {
        return $this->annuity;
    }

    /**
     * @param float $annuity
     * @return ProposalCard
     */
    public function setAnnuity(float $annuity): ProposalCard
    {
        $this->annuity = $annuity;
        return $this;
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
     * @return ProposalCard
     */
    public function setNetwork(string $network): ProposalCard
    {
        $this->network = $network;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrepaid(): bool
    {
        return $this->prepaid;
    }

    /**
     * @param bool $prepaid
     * @return ProposalCard
     */
    public function setPrepaid(bool $prepaid): ProposalCard
    {
        $this->prepaid = $prepaid;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDigitalAccount(): bool
    {
        return $this->digitalAccount;
    }

    /**
     * @param bool $digitalAccount
     * @return ProposalCard
     */
    public function setDigitalAccount(bool $digitalAccount): ProposalCard
    {
        $this->digitalAccount = $digitalAccount;
        return $this;
    }

    /**
     * Parse props to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            array_filter([
                'international' => $this->international,
                'annuity' => $this->annuity,
                'network' => $this->network,
                'prepaid' => $this->prepaid,
                'digitalAccount' => $this->digitalAccount
            ], function ($v) {
                return ! is_null($v);
            })
        );
    }
}