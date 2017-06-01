<?php

namespace Niodev\NioText;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    public $apiUrl = 'https://api.niotext.com';
    public $apiClient;
    public $appSecret;

    public function __construct($appSecret, $apiUrl = null)
    {
        if ($apiUrl) {
            $this->apiUrl = $apiUrl;
        }

        $this->appSecret = $appSecret;
        $this->apiClient = $this->_createApiClient();
    }

    private function _createApiClient()
    {
        $client = new GuzzleClient([
            'base_uri' => $this->apiUrl,
            'headers'  => [
                'Accept'        => 'application/json',
                'Authorization' => 'Bearer ' . $this->appSecret,
            ],
        ]);

        return $client;
    }

    public function login()
    {
        return $this->apiClient->post('/login');
    }

    public function logout()
    {
        return $this->apiClient->post('/logout');
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
