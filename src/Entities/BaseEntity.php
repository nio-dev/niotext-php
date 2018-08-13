<?php

namespace Niodev\NioText\Entities;

class BaseEntity
{
    protected $entity;
    protected $client;

    public function create(array $data)
    {
        return $this->client->post("/{$this->entity}", [
            'json' => $data,
        ]);
    }

    public function update(int $id, array $data)
    {
        return $this->client->put("/{$this->entity}/{$id}", [
            'json' => $data,
        ]);
    }

    public function delete(int $id)
    {
        return $this->client->delete("/{$this->entity}/{$id}");
    }

    public function retrieve(array $payload)
    {
        return $this->client->get("/{$this->entity}", [
            'json' => $payload,
        ]);
    }
}
