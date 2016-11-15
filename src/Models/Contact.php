<?php

namespace Niodev\NioText\Models;

class Contact extends BaseModel
{
    public function __construct($nioText)
    {
        $this->modelName = 'contacts';
        $this->nioText = $nioText;
    }
}
