<?php

namespace Niodev\NioText\Models;

class Account extends BaseModel
{
    public function __construct($nioText)
    {
        $this->modelName = 'accounts';
        $this->nioText = $nioText;
    }
}
