<?php

namespace Niodev\NioText\Entities;

class User extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'users';
    }
}
