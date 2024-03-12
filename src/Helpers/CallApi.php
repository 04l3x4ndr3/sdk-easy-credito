<?php

namespace O4l3x4ndr3\SdkEasyCredito\Helpers;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Configuration;

class CallApi
{
    const USER_AGENT = "SdkEasyCredito";
    const CONTENT_TYPE_JSON = 'application/json';
    const CONTENT_TYPE_URL_URLENCODED = 'application/x-www-form-urlencoded';
    const TOKEN_TYPE = 'Bearer';

    private Configuration $config;
    private ?array $header;
    private ?array $credential;

    /**
     * @param Configuration|null $config
     */
    public function __construct(?Configuration $config = NULL)
    {
        $this->config = $config ?? new Configuration();
        $this->credential = $this->config->getCredential();
        $this->header = array_merge([
            'User-Agent' => self::USER_AGENT,
            'Content-Type' => self::CONTENT_TYPE_JSON
        ], $this->config->getHttpHeader());
    }

    /**
     * @return array|null
     */
    public function getHeader(): ?array
    {
        return $this->header;
    }

    /**
     * @param array|null $header
     *
     * @return CallApi
     */
    public function setHeader(?array $header): CallApi
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCredential(): ?array
    {
        return $this->credential;
    }

    /**
     * @param array|null $credential
     *
     * @return CallApi
     */
    public function setCredential(?array $credential): CallApi
    {
        $this->credential = $credential;
        return $this;
    }

    /** TODO: Implements
     * @return object
     * @throws GuzzleException
     */
    public function accessToken(): object
    {
        $client = new Client();
        $options = [
            'headers' => [
                'Content-Type' => self::CONTENT_TYPE_URL_URLENCODED,
            ],
            'form_params' => $this->config->getCredential()
        ];
        $res = $client->request('POST', Configuration::URL_AUTH, $options);
        return json_decode($res->getBody());
    }

    /** TODO: Implements
     * @param string $method
     * @param string $endpoint
     * @param array|null $body
     * @return array|object
     * @throws Exception
     * @throws GuzzleException
     */
    public function call(string $method, string $endpoint, ?array $body = NULL): array|object
    {
        try {
            $token = $this->accessToken();

            $client = new Client();
            $options = array_filter([
                'headers' => [
                    'Content-type' => self::CONTENT_TYPE_JSON,
                    'Authorization' => self::TOKEN_TYPE . " {$token->access_token}"
                ],
                'json' => $body
            ]);

            $res = $client->request($method, "{$this->config->getUrl()}{$endpoint}", $options);
            return json_decode($res->getBody());
        } catch (ClientException $e) {
            throw new Exception($e->getResponse()->getBody()->getContents(), $e->getCode(), $e);
        }
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }
}