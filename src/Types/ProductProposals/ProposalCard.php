<?php
namespace O4l3x4ndr3\SdkEasyCredito\Types\ProductProposals;

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\CreditStatus;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;
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
        ?CreditStatus $lastStatus,
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
            ProductTypestring::CARD,
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
     * @return Card
     */
    public function setInternational(bool $international): Card
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
     * @return Card
     */
    public function setAnnuity(float $annuity): Card
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
     * @return Card
     */
    public function setNetwork(string $network): Card
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
     * @return Card
     */
    public function setPrepaid(bool $prepaid): Card
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
     * @return Card
     */
    public function setDigitalAccount(bool $digitalAccount): Card
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