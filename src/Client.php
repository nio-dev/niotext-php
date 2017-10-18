<?php

namespace Niodev\NioText;

use GuzzleHttp\Client as GuzzleClient;
use Niodev\NioText\Entities\Account;
use Niodev\NioText\Entities\Appointment;
use Niodev\NioText\Entities\Contact;
use Niodev\NioText\Entities\User;

class Client
{
    public $client;

    public function __construct($appSecret, $url = 'https://api.niotext.com')
    {
        $this->client = new GuzzleClient([
            'base_uri' => $url,
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$appSecret}",
            ],
        ]);
    }

    public function account()
    {
        return new Account($this->client);
    }

    public function user()
    {
        return new User($this->client);
    }

    public function contact()
    {
        return new Contact($this->client);
    }

    public function appointments()
    {
        return new Appointment($this->client);
    }
}
