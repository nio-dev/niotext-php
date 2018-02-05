<?php

namespace Niodev\NioText\Entities;

class Conversation extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'conversations';
    }
}
