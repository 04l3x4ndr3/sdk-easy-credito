<?php
namespace O4l3x4ndr3\SdkEasyCredito\Types;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Education;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\Occupation;
use O4l3x4ndr3\SdkEasyCredito\Helpers\Enum\PipelineStatus;
use O4l3x4ndr3\SdkEasyCredito\Helpers\LogData;
/**
 * Modelo de Cliente
 */
class Client implements LogData
{
    protected ?string $id;
    protected ?PipelineStatus $status;
    protected string $dateCreated;
    protected string $lastUpdated;
    protected ?string $cpf;
    protected string $name;
    protected string $email;
    protected string $birthdate;
    protected string $phone;
    protected ?string $zipCode;
    protected bool $hasCreditCard;
    protected bool $hasRestriction;
    protected bool $hasOwnHouse;
    protected bool $hasVehicle;
    protected bool $hasAndroid;
    protected ?Education $education;
    protected ?int $banks;
    protected ?Occupation $occupation;
    protected ?float $income;
    protected ?array $products;

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
     * @param Education|null $education
     * @param int|null $banks
     * @param Occupation|null $occupation
     * @param float|null $income
     * @param array|null $products
     * @param PipelineStatus|null $status
     * @param string|null $dateCreated
     * @param string|null $lastUpdated
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
        ?Education $education = null,
        ?int $banks = null,
        ?Occupation $occupation = null,
        ?float $income = null,
        ?array $products = null,
        ?PipelineStatus $status = null,
        ?string $dateCreated = null,
        ?string $lastUpdated = null
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
     * @return PipelineStatus|null
     */
    public function getStatus(): ?PipelineStatus
    {
        return $this->status;
    }

    /**
     * @param PipelineStatus|null $status
     * @return Client
     */
    public function setStatus(?PipelineStatus $status): Client
    {
        $this->status = $status;
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
     * @return Client
     */
    public function setDateCreated(string $dateCreated): Client
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
     * @return Client
     */
    public function setLastUpdated(string $lastUpdated): Client
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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Client
     */
    public function setName(string $name): Client
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Client
     */
    public function setEmail(string $email): Client
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @param string $birthdate
     * @return Client
     */
    public function setBirthdate(string $birthdate): Client
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Client
     */
    public function setPhone(string $phone): Client
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
     * @return bool
     */
    public function isHasCreditCard(): bool
    {
        return $this->hasCreditCard;
    }

    /**
     * @param bool $hasCreditCard
     * @return Client
     */
    public function setHasCreditCard(bool $hasCreditCard): Client
    {
        $this->hasCreditCard = $hasCreditCard;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasRestriction(): bool
    {
        return $this->hasRestriction;
    }

    /**
     * @param bool $hasRestriction
     * @return Client
     */
    public function setHasRestriction(bool $hasRestriction): Client
    {
        $this->hasRestriction = $hasRestriction;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasOwnHouse(): bool
    {
        return $this->hasOwnHouse;
    }

    /**
     * @param bool $hasOwnHouse
     * @return Client
     */
    public function setHasOwnHouse(bool $hasOwnHouse): Client
    {
        $this->hasOwnHouse = $hasOwnHouse;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasVehicle(): bool
    {
        return $this->hasVehicle;
    }

    /**
     * @param bool $hasVehicle
     * @return Client
     */
    public function setHasVehicle(bool $hasVehicle): Client
    {
        $this->hasVehicle = $hasVehicle;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasAndroid(): bool
    {
        return $this->hasAndroid;
    }

    /**
     * @param bool $hasAndroid
     * @return Client
     */
    public function setHasAndroid(bool $hasAndroid): Client
    {
        $this->hasAndroid = $hasAndroid;
        return $this;
    }

    /**
     * @return Education|null
     */
    public function getEducation(): ?Education
    {
        return $this->education;
    }

    /**
     * @param Education|null $education
     * @return Client
     */
    public function setEducation(?Education $education): Client
    {
        $this->education = $education;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBanks(): ?int
    {
        return $this->banks;
    }

    /**
     * @param int|null $banks
     * @return Client
     */
    public function setBanks(?int $banks): Client
    {
        $this->banks = $banks;
        return $this;
    }

    /**
     * @return Occupation|null
     */
    public function getOccupation(): ?Occupation
    {
        return $this->occupation;
    }

    /**
     * @param Occupation|null $occupation
     * @return Client
     */
    public function setOccupation(?Occupation $occupation): Client
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

    public function getLogData() : array
    {
        return [
            "latitude" => -16.6982283,
            "longitude" => -49.2581201,
            "occurrenceDate" => date("c"),
            "userAgent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36",
            "ip" => "0.0.0.0",
            "mac" => "00:00:00:00:00:00"
        ];
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
            'logData' => $this->getLogData(),
        ], function ($v) {
            return !empty($v);
        });
    }
}