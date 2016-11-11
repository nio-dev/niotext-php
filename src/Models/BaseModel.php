<?php

namespace Niodev\NioText\Models;

class BaseModel
{
    public $modelName;
    protected $nioText;

    public function __construct($nioText)
    {
        $this->nioText = $nioText;
    }

    public function create($data)
    {
        return $this->nioText->apiClient->post('/'.$apiRoot.$modelName, [
            'json' => $data,
        ]);
    }

    public function update($data, $id = '')
    {
        if($id) {
            $id = '/'.$id;
        }

        return $this->nioText->apiClient->put('/'.$apiRoot.$modelName.$id, [
            'json' => $event->account,
        ]);
    }

    public function delete($id)
    {
        return $this->nioText->apiClient->delete('/'.$apiRoot.$modelName, [
            'json' => ['id' => $id],
        ]);
    }
}
