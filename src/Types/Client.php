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
    protected string $birthday;
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
     * @param string|null $birthday
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
        ?string $birthday,
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
        $this->birthday = $birthday;
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
            'birthday' => $this->birthday,
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