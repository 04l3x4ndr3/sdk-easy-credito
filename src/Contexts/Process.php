<?php

namespace O4l3x4ndr3\SdkEasyCredito\Contexts;

use GuzzleHttp\Exception\GuzzleException;
use O4l3x4ndr3\SdkEasyCredito\Types\Client;
use O4l3x4ndr3\SdkEasyCredito\Types\File;
use O4l3x4ndr3\SdkEasyCredito\Types\Proposal;
use O4l3x4ndr3\SdkEasyCredito\Configuration;
use O4l3x4ndr3\SdkEasyCredito\Helpers\CallApi;

class Process extends CallApi
{
    /**
     * Properties list
     */

    /**
     * Construct method
     */
    public function __construct(?Configuration $configuration = null)
    {
        parent::__construct($configuration);
    }

    /**
     * Public Methods
     * @throws GuzzleException
     */
    public function signup(?Client $client, bool $simple = false): object
    {
        if($simple) {
            return $this->call('POST', '/v2.1/process/simple_signup', $client->toArray());
        }
        return $this->call('POST', '/v2.1/process/signup', $client->toArray());
    }

    public function proposal(?Proposal $proposal, ?string $client_id): object
    {
        return $this->call('POST', '/v2.1/process/proposal/'.$client_id, $proposal->toArray());
    }

    public function document(?File $file, ?int $client_id): object
    {
        return $this->call('PUT', '/v2/process/document/'.$client_id, $file->toArray());
    }

    public function status(?string $client_id): object
    {
        return $this->call('GET', '/v2/process/status/'.$client_id);
    }

    public function expire_proposals(?string $client_id): object
    {
        return $this->call('POST', '/v2.1/process/expire_proposals/'.$client_id);
    }

    public function toArray(): array
    {
        return [

        ];
    }
}
