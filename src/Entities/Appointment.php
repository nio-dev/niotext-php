<?php

namespace Niodev\NioText\Entities;

class Appointment extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'appointments';
    }
}
