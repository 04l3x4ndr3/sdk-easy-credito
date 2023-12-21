<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\CreditStatus;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\ProductTypestring;

/**
 * Modelos das produtos que compõe propostas RECEBIDAS pela Tok e ENVIADAS pela EasyCrédito
 */
abstract class ProductProposal
{
    protected int $customerServiceNumber;
    protected ?ProductTypestring $typeString;
    protected string $product;
    protected int $productId;
    protected bool $hasDocuments;
    protected bool $hasContract;
    protected string $logo;
    protected ?CreditStatus $lastStatus;
    protected string $dateCreated;
    protected string $lastUpdated;
    protected array $pendentDocuments = ["SELF", "IDENTITY_FRONT", "IDENTITY_BACK","ADDRESS_PROF","INCOME_PROF"];

    public function __construct(
        ?ProductTypestring $typeString,
        ?int $customerServiceNumber,
        ?string $product,
        ?int $productId,
        ?bool $hasDocuments,
        ?bool $hasContract,
        ?CreditStatus $lastStatus,
        ?string $logo,
        ?string $dateCreated,
        ?string $lastUpdated
    ) {
        $this->typeString = $typeString;
        $this->customerServiceNumber = $customerServiceNumber;
        $this->product = $product;
        $this->productId = $productId;
        $this->hasDocuments = $hasDocuments;
        $this->hasContract = $hasContract;
    }

    /**
     * @return int
     */
    public function getCustomerServiceNumber(): int
    {
        return $this->customerServiceNumber;
    }

    /**
     * @param int $customerServiceNumber
     * @return ProductProposal
     */
    public function setCustomerServiceNumber(int $customerServiceNumber): ProductProposal
    {
        $this->customerServiceNumber = $customerServiceNumber;
        return $this;
    }

    /**
     * @return ?ProductTypestring
     */
    public function getTypeString(): string
    {
        return $this->typeString;
    }

    /**
     * @param ?ProductTypestring $typeString
     * @return ProductProposal
     */
    public function setTypeString(?ProductTypestring $typeString): ProductProposal
    {
        $this->typeString = $typeString;
        return $this;
    }

    /**
     * @return string
     */
    public function getProduct(): string
    {
        return $this->product;
    }

    /**
     * @param string $product
     * @return ProductProposal
     */
    public function setProduct(string $product): ProductProposal
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return ProductProposal
     */
    public function setProductId(int $productId): ProductProposal
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasDocuments(): bool
    {
        return $this->hasDocuments;
    }

    /**
     * @param bool $hasDocuments
     * @return ProductProposal
     */
    public function setHasDocuments(bool $hasDocuments): ProductProposal
    {
        $this->hasDocuments = $hasDocuments;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasContract(): bool
    {
        return $this->hasContract;
    }

    /**
     * @param bool $hasContract
     * @return ProductProposal
     */
    public function setHasContract(bool $hasContract): ProductProposal
    {
        $this->hasContract = $hasContract;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return ProductProposal
     */
    public function setLogo(string $logo): ProductProposal
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return ?CreditStatus
     */
    public function getLastStatus(): CreditStatus
    {
        return $this->lastStatus;
    }

    /**
     * @param ?CreditStatus $lastStatus
     * @return ProductProposal
     */
    public function setLastStatus(?CreditStatus $lastStatus): ProductProposal
    {
        $this->lastStatus = $lastStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    /**
     * @param string $dateCreated
     * @return ProductProposal
     */
    public function setDateCreated(string $dateCreated): ProductProposal
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdated(): string
    {
        return $this->lastUpdated;
    }

    /**
     * @param string $lastUpdated
     * @return ProductProposal
     */
    public function setLastUpdated(string $lastUpdated): ProductProposal
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * @return array
     */
    public function getPendentDocuments(): array
    {
        return $this->pendentDocuments;
    }

    /**
     * @param array $pendentDocuments
     * @return ProductProposal
     */
    public function setPendentDocuments(array $pendentDocuments): ProductProposal
    {
        $this->pendentDocuments = $pendentDocuments;
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
            'customerServiceNumber' => $this->customerServiceNumber,
            'typeString' => $this->typeString,
            'product' => $this->product,
            'productId' => $this->productId,
            'hasDocuments' => $this->hasDocuments,
            'hasContract' => $this->hasContract,
            'logo' => $this->logo,
            'lastStatus' => $this->lastStatus,
            'dateCreated' => $this->dateCreated,
            'lastUpdated' => $this->lastUpdated,
            'pendentDocuments' => $this->pendentDocuments
        ], function ($v) {
            return ! is_null($v);
        });
    }
}