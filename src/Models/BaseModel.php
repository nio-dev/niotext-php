<?php

namespace Niodev\NioText\Models;

class BaseModel
{
    protected $modelName;
    protected $nioText;

    public function create($data)
    {
        return $this->nioText->apiClient->post('/' . $this->modelName, [
            'json' => $data,
        ]);
    }

    public function update($data, $id = '')
    {
        if ($id) {
            $id = '/' . $id;
        }

        return $this->nioText->apiClient->put('/' . $this->modelName . $id, [
            'json' => $data,
        ]);
    }

    public function delete($id)
    {
        return $this->nioText->apiClient->delete('/' . $this->modelName, [
            'json' => ['related_id' => $id],
        ]);
    }
}
