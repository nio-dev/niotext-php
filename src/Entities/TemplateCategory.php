<?php

namespace Niodev\NioText\Entities;

class TemplateCategory extends BaseEntity
{
    public function __construct($client)
    {
        $this->client = $client;
        $this->entity = 'categories';
    }
}
