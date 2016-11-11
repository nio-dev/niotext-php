<?php

namespace Niodev\NioText\Models;

class User extends BaseModel
{
    public function __construct($nioText)
    {
        $this->modelName = 'users';
        $this->nioText = $nioText;
    }
}
