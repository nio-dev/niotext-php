<?php

namespace Niodev\NioText\Entities;

class Organization extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'organizations';
    }
}
