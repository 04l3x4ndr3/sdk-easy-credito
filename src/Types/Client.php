<?php
namespace O4l3x4ndr3\SdkEasyCredito\Types;
/**
 * Modelo de Cliente
 */
class Client
{
    protected ?string $id;
    protected ?string $status;
    protected ?string $dateCreated;
    protected ?string $lastUpdated;
    protected ?string $cpf;
    protected ?string $name;
    protected ?string $email;
    protected ?string $birthdate;
    protected ?string $phone;
    protected ?string $zipCode;
    protected ?bool $hasCreditCard;
    protected ?bool $hasRestriction;
    protected ?bool $hasOwnHouse;
    protected ?bool $hasVehicle;
    protected ?bool $hasAndroid;
    protected ?string $education;
    protected ?string $banks;
    protected ?string $occupation;
    protected ?float $income;
    protected ?array $products;
    protected ?LogData $logData;

    /**
     * @param string|null $id
     * @param string|null $cpf
     * @param string|null $name
     * @param string|null $email
     * @param string|null $birthdate
     * @param string|null $phone
     * @param string|null $zipCode
     * @param bool $hasCreditCard
     * @param bool $hasRestriction
     * @param bool $hasOwnHouse
     * @param bool $hasVehicle
     * @param bool $hasAndroid
     * @param string|null $education
     * @param string|null $banks
     * @param string|null $occupation
     * @param float|null $income
     * @param array|null $products
     * @param string|null $status
     * @param string|null $dateCreated
     * @param string|null $lastUpdated
     * @param LogData|null $logData
     */
    public function __construct(
        ?string $id,
        ?string $cpf,
        ?string $name,
        ?string $email,
        ?string $birthdate,
        ?string $phone,
        ?string $zipCode,
        ?bool $hasCreditCard,
        ?bool $hasRestriction,
        ?bool $hasOwnHouse,
        ?bool $hasVehicle,
        ?bool $hasAndroid,
        ?string $education = null,
        ?string $banks = null,
        ?string $occupation = null,
        ?float $income = null,
        ?array $products = null,
        ?string $status = null,
        ?string $dateCreated = null,
        ?string $lastUpdated = null,
        ?LogData $logData = null
    ) {
        $this->id = $id;
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
        $this->status = $status;
        $this->dateCreated = $dateCreated ?? date("c");
        $this->lastUpdated = $lastUpdated ?? date("c");
        $this->logData = $logData;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     * @return Client
     */
    public function setId(?string $id): Client
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     * @return Client
     */
    public function setStatus(?string $status): Client
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }

    /**
     * @param string|null $dateCreated
     * @return Client
     */
    public function setDateCreated(?string $dateCreated): Client
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastUpdated(): ?string
    {
        return $this->lastUpdated;
    }

    /**
     * @param string|null $lastUpdated
     * @return Client
     */
    public function setLastUpdated(?string $lastUpdated): Client
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    /**
     * @param string|null $cpf
     * @return Client
     */
    public function setCpf(?string $cpf): Client
    {
        $this->cpf = $cpf;
        return $this;
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
     * @return Client
     */
    public function setName(?string $name): Client
    {
        $this->name = $name;
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
     * @return Client
     */
    public function setEmail(?string $email): Client
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    /**
     * @param string|null $birthdate
     * @return Client
     */
    public function setBirthdate(?string $birthdate): Client
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return Client
     */
    public function setPhone(?string $phone): Client
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     * @return Client
     */
    public function setZipCode(?string $zipCode): Client
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isHasCreditCard(): ?bool
    {
        return $this->hasCreditCard;
    }

    /**
     * @param bool $hasCreditCard
     * @return Client
     */
    public function setHasCreditCard(?bool $hasCreditCard): Client
    {
        $this->hasCreditCard = $hasCreditCard;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isHasRestriction(): ?bool
    {
        return $this->hasRestriction;
    }

    /**
     * @param bool $hasRestriction
     * @return Client
     */
    public function setHasRestriction(?bool $hasRestriction): Client
    {
        $this->hasRestriction = $hasRestriction;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isHasOwnHouse(): ?bool
    {
        return $this->hasOwnHouse;
    }

    /**
     * @param bool $hasOwnHouse
     * @return Client
     */
    public function setHasOwnHouse(?bool $hasOwnHouse): Client
    {
        $this->hasOwnHouse = $hasOwnHouse;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isHasVehicle(): ?bool
    {
        return $this->hasVehicle;
    }

    /**
     * @param bool $hasVehicle
     * @return Client
     */
    public function setHasVehicle(?bool $hasVehicle): Client
    {
        $this->hasVehicle = $hasVehicle;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function isHasAndroid(): ?bool
    {
        return $this->hasAndroid;
    }

    /**
     * @param bool $hasAndroid
     * @return Client
     */
    public function setHasAndroid(?bool $hasAndroid): Client
    {
        $this->hasAndroid = $hasAndroid;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEducation(): ?string
    {
        return $this->education;
    }

    /**
     * @param string|null $education
     * @return Client
     */
    public function setEducation(?string $education): Client
    {
        $this->education = $education;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBanks(): ?string
    {
        return $this->banks;
    }

    /**
     * @param string|null $banks
     * @return Client
     */
    public function setBanks(?string $banks): Client
    {
        $this->banks = $banks;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    /**
     * @param string|null $occupation
     * @return Client
     */
    public function setOccupation(?string $occupation): Client
    {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getIncome(): ?float
    {
        return $this->income;
    }

    /**
     * @param float|null $income
     * @return Client
     */
    public function setIncome(?float $income): Client
    {
        $this->income = $income;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param array|null $products
     * @return Client
     */
    public function setProducts(?array $products): Client
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @return LogData|null
     */
    public function getLogData(): ?LogData
    {
        return $this->logData;
    }

    /**
     * @param LogData|null $logData
     * @return Client
     */
    public function setLogData(?LogData $logData): Client
    {
        $this->logData = $logData;
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
            'id' => $this->id,
            'status' => $this->status,
            'dateCreated' => $this->dateCreated,
            'lastUpdated' => $this->lastUpdated,
            'cpf' => $this->cpf,
            'name' => $this->name,
            'birthday' => $this->birthdate,
            'email' => $this->email,
            'phone' => $this->phone,
            'zipCode' => $this->zipCode,
            'hasCreditCard' => $this->hasCreditCard,
            'hasRestriction' => $this->hasRestriction,
            'hasOwnHouse' => $this->hasOwnHouse,
            'hasVehicle' => $this->hasVehicle,
            'hasAndroid' => $this->hasAndroid,
            'education' => $this->education,
            'banks' => $this->banks,
            'occupation' => $this->occupation,
            'income' => $this->income,
            'products' => $this->products,
            'logData' => $this->logData->toArray(),
        ], function ($v) {
            return !empty($v);
        });
    }
}