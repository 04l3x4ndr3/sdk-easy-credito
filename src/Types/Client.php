<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class Client
{
    private ?string $id;
    private ?string $status;
    private ?string $dateCreated;
    private ?string $lastUpdated;
    private ?string $cpf;
    private ?string $name;
    private ?string $email;
    private ?string $birthdate;
    private ?string $phone;
    private ?string $zipCode;
    private ?bool $hasCreditCard;
    private ?bool $hasRestriction;
    private ?bool $hasOwnHouse;
    private ?bool $hasVehicle;
    private ?bool $hasAndroid;
    private ?string $education;
    private ?string $banks;
    private ?string $occupation;
    private ?float $income;
    private ?array $products;
    private ?LogData $logData;

    public function __construct(
        ?string  $cpf,
        ?string  $name,
        ?string  $email,
        ?string  $birthdate,
        ?string  $phone,
        ?string  $zipCode,
        ?bool    $hasCreditCard,
        ?bool    $hasRestriction,
        ?bool    $hasOwnHouse,
        ?bool    $hasVehicle,
        ?bool    $hasAndroid,
        ?string  $education,
        ?string  $banks,
        ?string  $occupation,
        ?float   $income,
        ?array   $products,
        ?LogData $logData
    )
    {
        $this->id = null;
        $this->status = null;
        $this->dateCreated = null;
        $this->lastUpdated = null;
        $this->cpf = $cpf;
        $this->name = $name;
        $this->email = $email;
        $this->birthdate = $birthdate;
        $this->phone = $phone;
        $this->zipCode = $zipCode;
        $this->hasCreditCard = $hasCreditCard;
        $this->hasRestriction = $hasRestriction;
        $this->hasOwnHouse = $hasOwnHouse;
        $this->hasVehicle = $hasVehicle;
        $this->hasAndroid = $hasAndroid;
        $this->education = $education;
        $this->banks = $banks;
        $this->occupation = $occupation;
        $this->income = $income;
        $this->products = $products;
        $this->logData = $logData;
    }


    public function getId(): ?string
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    public function getLastUpdated(): ?string
    {
        return $this->lastUpdated;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(?string $cpf): Client
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): Client
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): Client
    {
        $this->email = $email;
        return $this;
    }

    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    public function setBirthdate(?string $birthdate): Client
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): Client
    {
        $this->phone = $phone;
        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): Client
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function isHasCreditCard(): ?bool
    {
        return $this->hasCreditCard;
    }

    public function setHasCreditCard(?bool $hasCreditCard): Client
    {
        $this->hasCreditCard = $hasCreditCard;
        return $this;
    }

    public function isHasRestriction(): ?bool
    {
        return $this->hasRestriction;
    }

    public function setHasRestriction(?bool $hasRestriction): Client
    {
        $this->hasRestriction = $hasRestriction;
        return $this;
    }

    public function isHasOwnHouse(): ?bool
    {
        return $this->hasOwnHouse;
    }

    public function setHasOwnHouse(?bool $hasOwnHouse): Client
    {
        $this->hasOwnHouse = $hasOwnHouse;
        return $this;
    }

    public function isHasVehicle(): ?bool
    {
        return $this->hasVehicle;
    }

    public function setHasVehicle(?bool $hasVehicle): Client
    {
        $this->hasVehicle = $hasVehicle;
        return $this;
    }

    public function isHasAndroid(): ?bool
    {
        return $this->hasAndroid;
    }

    public function setHasAndroid(?bool $hasAndroid): Client
    {
        $this->hasAndroid = $hasAndroid;
        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(?string $education): Client
    {
        $this->education = $education;
        return $this;
    }

    public function getBanks(): ?string
    {
        return $this->banks;
    }

    public function setBanks(?string $banks): Client
    {
        $this->banks = $banks;
        return $this;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(?string $occupation): Client
    {
        $this->occupation = $occupation;
        return $this;
    }

    public function getIncome(): ?float
    {
        return $this->income;
    }

    public function setIncome(?float $income): Client
    {
        $this->income = $income;
        return $this;
    }

    public function getProducts(): ?array
    {
        return $this->products;
    }

    public function setProducts(?array $products): Client
    {
        $this->products = $products;
        return $this;
    }

    public function getLogData(): ?LogData
    {
        return $this->logData;
    }

    public function setLogData(?LogData $logData): Client
    {
        $this->logData = $logData;
        return $this;
    }

    public function toArray(): ?array
    {
        $arLogData = isset($this->logData) ? ($this->logData)->toArray() : null;

        return array_filter([
            "cpf" => $this->cpf,
            "name" => $this->name,
            "birthday" => $this->birthdate,
            "email" => $this->email,
            "phone" => $this->phone,
            "zipCode" => $this->zipCode,
            "hasCreditCard" => $this->hasCreditCard,
            "hasRestriction" => $this->hasRestriction,
            "hasOwnHouse" => $this->hasOwnHouse,
            "hasVehicle" => $this->hasVehicle,
            "hasAndroid" => $this->hasAndroid,
            'logData' => $arLogData
        ], function ($v) {
            return !is_null($v);
        });
    }
}