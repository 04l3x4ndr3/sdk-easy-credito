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
        $this->ip = $ip ?? $_SERVER['REMOTE_ADDR'];
        $this->mac = $mac;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): LogData
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): LogData
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getOccuranceDate(): string
    {
        return $this->occuranceDate;
    }

    public function setOccuranceDate(?string $occuranceDate): LogData
    {
        $this->occuranceDate = $occuranceDate;
        return $this;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): LogData
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    public function getIp(): string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): LogData
    {
        $this->ip = $ip;
        return $this;
    }

    public function getMac(): string
    {
        return $this->mac;
    }

    public function setMac(?string $mac): LogData
    {
        $this->mac = $mac;
        return $this;
    }

    public function toArray(): ?array
    {
        return array_filter([
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
            "occurrenceDate" => $this->occuranceDate,
            "userAgent" => $this->userAgent,
            "ip" => $this->ip,
            "mac" => $this->mac,
        ], function ($v) {
            return !is_null($v);
        });
    }
}
