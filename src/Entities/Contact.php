<?php

namespace Niodev\NioText\Entities;

class Contact extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'contacts';
    }
}
