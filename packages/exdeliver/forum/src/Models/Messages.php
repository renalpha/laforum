<?php

namespace Exdeliver\Forum\Models;

use BaseModel;

class Messages extends BaseModel{
    
    protected $table = 'messages';

    public function thread()
    {
        return $this->belongsTo(new Threads());
    }

    public function category()
    {
        return $this->belongsTo(new Categories());
    }
}