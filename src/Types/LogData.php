<?php

namespace O4l3x4ndr3\SdkEasyCredito\Types;

class LogData
{
    protected ?float $lat;
    protected ?float $long;
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
    public function __construct(float $lat = 0, float $long = 0, string $occuranceDate = null, string $userAgent = null, string $ip = "0.0.0.0", string $mac = "00:00:00:00:00:00")
    {
        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
            $expectedIp = $_SERVER["HTTP_CLIENT_IP"];
        }
        elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $expectedIp = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        else {
            $expectedIp = $_SERVER["REMOTE_ADDR"];
        }
        exec("arp -a $expectedIp", $output);
        $expectedMac = $output[0] ?? null;

        $this->lat = $lat;
        $this->long = $long;
        $this->occuranceDate = $occuranceDate ?? date("c");
        $this->userAgent = $userAgent ?? $_SERVER["HTTP_USER_AGENT"];
        $this->ip = $ip ?? $expectedIp;
        $this->mac = $mac ?? $expectedMac;
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     * @return LogData
     */
    public function setLat(float $lat): LogData
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @return float
     */
    public function getLong(): float
    {
        return $this->long;
    }

    /**
     * @param float $long
     * @return LogData
     */
    public function setLong(float $long): LogData
    {
        $this->long = $long;
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
     * @param string $occuranceDate
     * @return LogData
     */
    public function setOccuranceDate(string $occuranceDate): LogData
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
    public function setUserAgent(string $userAgent): LogData
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
     * @param string $ip
     * @return LogData
     */
    public function setIp(string $ip): LogData
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
     * @return array
     */
    public function toArray(): array
    {
        return array_filter([
            "latitude" => $this->latitude ?? -16.6982283,
            "longitude" => $this->longitude ?? -49.2581201,
            "occurrenceDate" => $this->occurrenceDate ?? date("c"),
            "userAgent" => $this->userAgent ?? "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36",
            "ip" => $this->ip ?? "0.0.0.0",
            "mac" => $this->mac ?? "00:00:00:00:00:00"
        ], function ($v) {
            return !empty($v);
        });
    }
}
