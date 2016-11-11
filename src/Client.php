<?php

namespace Niodev\NioText;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Subscriber\Retry\RetrySubscriber;

class Client
{
    public $apiUrl = 'https://app.niotext.com';
    public $apiRoot = 'api/';
    public $apiClient;
    public $appSecret;

    public function __construct($appSecret, $apiUrl = NULL)
    {
        if($apiUrl) {
            $this->apiUrl = $apiUrl;
        }

        $this->appSecret = $appSecret;
        $this->apiClient = $this->_createApiClient();
    }

    private function _createApiClient()
    {
        // $retry = new RetrySubscriber([
        //     'filter' => RetrySubscriber::createStatusFilter(),
        //     'max' => 10
        // ]);

        $client = new GuzzleClient([
            'base_url' => $this->apiUrl,
            'defaults' => [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer '.$this->appSecret
                ]
            ]
        ]);

        // $client->getEmitter()->attach($retry);

        return $client;
    }

    public function account()
    {
        return new Models\Account($this);
    }
}
