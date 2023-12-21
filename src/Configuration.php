<?php

/**
 * Class Configuration
 *
 * This class represents the configuration settings for the EasyCredito SDK.
 *
 * @package O4l3x4ndr3\SdkEasyCredito
 */

namespace O4l3x4ndr3\SdkEasyCredito;

use O4l3x4ndr3\SdkEasyCredito\Helpers\Scopes;

class  Configuration
{
    public const ENV_STAGE = "development";
    public const ENV_PRODUCTION = "production";
    public const URL_STAGE = "https://demo-api.easycredito.com.br/api/external";
    public const URL_AUTH = "https://auth.easycredito.com.br/client/auth";
    public const URL_PRODUCTION = "";

    private ?string $environment;
    private ?array $credentials;
    private ?array $httpHeader;

    public function __construct(?string $scope = NULL, ?string $clientId = NULL, ?string $clientSecret = NULL)
    {
        $this->credentials = [
            'scope' => $scope ?? EASYCREDITO_SCOPE,
            'client_id' => $clientId ?? EASYCREDITO_CLIENT_ID,
            'client_secret' => $clientSecret ?? EASYCREDITO_CLIENT_SECRET
        ];
        $this->httpHeader = [];
        $this->environment = EASYCREDITO_ENVIRONMENT ?? self::ENV_STAGE;
    }

    /**
     * @return array
     */
    public function getCredential(): array
    {
        return $this->credentials;
    }

    /**
     * @param string|null $clientId
     * @param string|null $clientSecret
     * @param Scopes|null $scopes
     * @return void
     */
    public function setCredential(?string $clientId = NULL, ?string $clientSecret = NULL, ?Scopes $scopes = null): void
    {
        $cur = $this->credentials;
        $new = [
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'scopes' => $scopes::cases(),
        ];
        $this->credentials = array_merge($cur, $new);
    }

    /**
     * @return string|null
     */
    public function getEnvironment(): ?string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     * @return void
     */
    public function setEnvironment(string $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * @return array|null
     */
    public function getHttpHeader(): ?array
    {
        return $this->httpHeader;
    }

    /**
     * @param array $httpHeader
     */
    public function setHttpHeader(array $httpHeader): void
    {
        $this->httpHeader = $httpHeader;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        if ($this->getEnvironment() === self::ENV_PRODUCTION) {
            return self::URL_PRODUCTION;
        }

        return self::URL_STAGE;
    }
}


const EASYCREDITO_AUTH = "https://auth.easycredito.com.br/client/auth";
const EASYCREDITO_DOMAIN = "https://demo-api.easycredito.com.br/api/external";
const EASYCREDITO_ENVIRONMENT = "development";
const EASYCREDITO_CLIENT_ID = "224effd0-a24c-4500-873c-5b14bbde888e";
const EASYCREDITO_CLIENT_SECRET = "7d953dc2cd63a2991ce1e572c089ce6aa6e6b0d3616ce047da50c903362ab814";
const EASYCREDITO_SCOPE = "api-external";