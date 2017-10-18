<?php

namespace Niodev\NioText\Entities;

class BaseEntity
{
    protected $entity;
    protected $client;

    public function create($data)
    {
        return $this->client->post("/{$this->entity}", [
            'json' => $data,
        ]);
    }

    public function update($data, $id = '')
    {
        if ($id) {
            $id = "/$id";
        }

        return $this->client->put("/{$this->entity}{$id}", [
            'json' => $data,
        ]);
    }

    public function delete($data, $id = '')
    {
        if ($id) {
            $id = "/$id";
        }

        return $this->client->delete("/{$this->entity}{$id}", [
            'json' => $data,
        ]);
    }
}
