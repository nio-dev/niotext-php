<?php

namespace Niodev\NioText\Entities;

class Account extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'accounts';
    }
}
