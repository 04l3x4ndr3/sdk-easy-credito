<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class LogData
{
    protected ?float $latitude;
    protected ?float $longitude;
    protected ?string $occuranceDate;
    protected ?string $userAgent;
    protected ?string $ip;
    protected ?string $mac;

    /**
     * @param float|null $lat
     * @param float|null $long
     * @param string|null $occuranceDate
     * @param string|null $userAgent
     * @param string|null $ip
     * @param string|null $mac
     */
    public function __construct(
        ?float  $lat = null,
        ?float  $long = null,
        ?string $occuranceDate = null,
        ?string $userAgent = null,
        ?string $ip = null,
        ?string $mac = null
    )
    {
        $this->latitude = $lat;
        $this->longitude = $long;
        $this->occuranceDate = $occuranceDate ?? date("c");
        $this->userAgent = $userAgent ?? $_SERVER["HTTP_USER_AGENT"];
        $this->ip = $ip ;
        $this->mac = $mac;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float|null $latitude
     * @return LogData
     */
    public function setLatitude(?float $latitude): LogData
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float|null $longitude
     * @return LogData
     */
    public function setLongitude(?float $longitude): LogData
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return string
     */
    public function getOccuranceDate(): string
    {
        return $this->occuranceDate;
    }

    /**
     * @param string|null $occuranceDate
     * @return LogData
     */
    public function setOccuranceDate(?string $occuranceDate): LogData
    {
        $this->occuranceDate = $occuranceDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * @param string $userAgent
     * @return LogData
     */
    public function setUserAgent(?string $userAgent): LogData
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string|null $ip
     * @return LogData
     */
    public function setIp(?string $ip): LogData
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return string
     */
    public function getMac(): string
    {
        return $this->mac;
    }

    /**
     * @param string $mac
     * @return LogData
     */
    public function setMac(string $mac): LogData
    {
        $this->mac = $mac;
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
            "latitude" => $this->latitude ,
            "longitude" => $this->longitude,
            "occurrenceDate" => $this->occuranceDate,
            "userAgent" => $this->userAgent,
            "ip" => $this->ip,
            "mac" => $this->mac,
        ], function ($v) {
            return !empty($v);
        });
    }
}
