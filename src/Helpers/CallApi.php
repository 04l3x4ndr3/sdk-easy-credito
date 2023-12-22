<?php

namespace O4l3x4ndr3\SdkEasyCredito\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Exceptions\EasyCreditoException;
class CallApi {
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
			'User-Agent' => USER_AGENT,
			'Content-Type' => CONTENT_TYPE_JSON
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
				'Content-Type' => CONTENT_TYPE_URL_URLENCODED,
			],
			'form_params' => $this->config->getCredential()
		];
		$res = $client->request('POST',Configuration::URL_AUTH, $options);
		return json_decode($res->getBody());
	}

    /** TODO: Implements
     * @param string $method
     * @param string $endpoint
     * @param array|null $body
     * @return array|object
     * @throws GuzzleException
     * @throws EasyCreditoException
     */
	public function call(string $method, string $endpoint, ?array $body = NULL): array | object
	{
		$token = $this->accessToken();

		$client = new Client();
		$options = array_filter([
			'headers' => [
				'Content-type' => CONTENT_TYPE_JSON,
				'Authorization' => TOKEN_TYPE . " {$token->access_token}"
			],
			'json' => $body
		]);
        try {
            $res = $client->request($method, "{$this->config->getUrl()}{$endpoint}", $options);
        } catch (GuzzleException $g) {
            throw new EasyCreditoException($g->getMessage(), $g->getCode(), $g->getPrevious());
        }
		return json_decode($res->getBody());
	}

	/**
	 * @return Configuration
	 */
	public function getConfig(): Configuration
	{
		return $this->config;
	}
}

const USER_AGENT = "SdkEasyCredito";
const CONTENT_TYPE_JSON = 'application/json';
const CONTENT_TYPE_URL_URLENCODED = 'application/x-www-form-urlencoded';
const TOKEN_TYPE = 'Bearer';