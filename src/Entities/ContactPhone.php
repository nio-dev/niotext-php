<?php

namespace Niodev\NioText\Entities;

class ContactPhone extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'contact-phones';
    }
}
