<?php

namespace O4l3x4ndr3\SdkDocway\Types;

class EligiblePatients
{

    private ?string $name;
    private ?string $cardNumber;
    private ?string $documentNumber;
    private ?string $dateOfBirth;
    private ?string $gender;
    private ?string $category;
    private ?string $subCategory;
    private ?string $holderDocumentNumber;
    private ?string $phoneNumber;
    private ?string $email;
    private bool $documentIsCPF;

    public function __construct(
        ?string $name = null,
        ?string $cardNumber = null,
        ?string $documentNumber = null,
        ?string $dateOfBirth = null,
        ?string $gender = null,
        ?string $category = null,
        ?string $subCategory = null,
        ?string $holderDocumentNumber = null,
        ?string $phoneNumber = null,
        ?string $email = null,
        bool $documentIsCPF = false
    )
    {
        $this->name = $name;
        $this->cardNumber = $cardNumber;
        $this->documentNumber = $documentNumber;
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
        $this->category = $category;
        $this->subCategory = $subCategory;
        $this->holderDocumentNumber = $holderDocumentNumber;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->documentIsCPF = $documentIsCPF;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return EligiblePatients
     */
    public function setName(?string $name): EligiblePatients
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * @param string|null $cardNumber
     *
     * @return EligiblePatients
     */
    public function setCardNumber(?string $cardNumber): EligiblePatients
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    /**
     * @param string|null $documentNumber
     *
     * @return EligiblePatients
     */
    public function setDocumentNumber(?string $documentNumber): EligiblePatients
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string|null $dateOfBirth
     *
     * @return EligiblePatients
     */
    public function setDateOfBirth(?string $dateOfBirth): EligiblePatients
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     *
     * @return EligiblePatients
     */
    public function setGender(?string $gender): EligiblePatients
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * @param string|null $category
     *
     * @return EligiblePatients
     */
    public function setCategory(?string $category): EligiblePatients
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }

    /**
     * @param string|null $subCategory
     *
     * @return EligiblePatients
     */
    public function setSubCategory(?string $subCategory): EligiblePatients
    {
        $this->subCategory = $subCategory;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHolderDocumentNumber(): ?string
    {
        return $this->holderDocumentNumber;
    }

    /**
     * @param string|null $holderDocumentNumber
     *
     * @return EligiblePatients
     */
    public function setHolderDocumentNumber(?string $holderDocumentNumber): EligiblePatients
    {
        $this->holderDocumentNumber = $holderDocumentNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string|null $phoneNumber
     *
     * @return EligiblePatients
     */
    public function setPhoneNumber(?string $phoneNumber): EligiblePatients
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     *
     * @return EligiblePatients
     */
    public function setEmail(?string $email): EligiblePatients
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return bool
     */
    public function documentIsCPF(): bool
    {
        return $this->documentIsCPF;
    }

    /**
     * @param bool $documentIsCPF
     *
     * @return EligiblePatients
     */
    public function setDocumentIsCPF(bool $documentIsCPF): EligiblePatients
    {
        $this->documentIsCPF = $documentIsCPF;
        return $this;
    }

    /**
     * Parse props to array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            "name" => $this->name,
            "cardNumber" => $this->cardNumber,
            "documentNumber" => $this->documentNumber,
            "dateOfBirth" => $this->dateOfBirth,
            "gender" => $this->gender,
            "category" => $this->category,
            "subCategory" => $this->subCategory,
            "holderDocumentNumber" => $this->holderDocumentNumber,
            "phoneNumber" => $this->phoneNumber,
            "email" => $this->email,
            "DocumentIsCPF" => $this->documentIsCPF,
        ];
    }

}
