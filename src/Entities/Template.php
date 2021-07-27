<?php

namespace Niodev\NioText\Entities;

class Template extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'templates';
    }
}
