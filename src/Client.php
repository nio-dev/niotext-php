<?php

namespace Niodev\NioText;

use Guzzle\Client as GuzzleClient;
use Guzzle\Subscriber\Retry\RetrySubscriber;

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

    public function login()
    {
        return $this->apiClient->post('/'.$this->apiRoot.'login');
    }

    public function logout()
    {
        return $this->apiClient->post('/'.$this->apiRoot.'logout');
    }

    public function account()
    {
        return new Models\Account($this);
    }

    public function user()
    {
        return new Models\User($this);
    }

    public function contact()
    {
        return new Models\Contact($this);
    }
}
