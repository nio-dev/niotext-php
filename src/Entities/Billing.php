<?php

namespace Niodev\NioText\Entities;

class Billing extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'transactions/period-billing';
    }
}
