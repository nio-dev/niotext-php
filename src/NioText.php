<?php

namespace Niodev\NioText;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Subscriber\Retry\RetrySubscriber;

class NioText
{
    protected $apiUrl = 'https://app.niotext.com';
    protected $apiRoot = 'api/';
    protected $apiClient;
    protected $appSecret;

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
        return Models\Account($this);
    }
}
