<?php

namespace Niodev\NioText;

use GuzzleHttp\Client as GuzzleClient;
use Niodev\NioText\Entities\Account;
use Niodev\NioText\Entities\Appointment;
use Niodev\NioText\Entities\Contact;
use Niodev\NioText\Entities\ContactPhone;
use Niodev\NioText\Entities\Conversation;
use Niodev\NioText\Entities\Organization;
use Niodev\NioText\Entities\Template;
use Niodev\NioText\Entities\TemplateCategory;
use Niodev\NioText\Entities\User;
use Niodev\NioText\Entities\Billing;

class Client
{
    public $client;

    public function __construct($authToken, $url = 'https://api.niotext.com')
    {
        $this->client = new GuzzleClient([
            'base_uri' => $url,
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$authToken}",
            ],
        ]);
    }

    public function account(): Account
    {
        return new Account($this->client);
    }

    public function appointment(): Appointment
    {
        return new Appointment($this->client);
    }

    public function billing() : Billing
    {
        return new Billing($this->client);
    }

    public function contact(): Contact
    {
        return new Contact($this->client);
    }

    public function contactPhone(): ContactPhone
    {
        return new ContactPhone($this->client);
    }

    public function conversation(): Conversation
    {
        return new Conversation($this->client);
    }

    public function organization(): Organization
    {
        return new Organization($this->client);
    }

    public function template(): Template
    {
        return new Template($this->client);
    }

    public function templateCategory(): TemplateCategory
    {
        return new TemplateCategory($this->client);
    }

    public function user(): User
    {
        return new User($this->client);
    }
}
