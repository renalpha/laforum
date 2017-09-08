<?php

namespace Exdeliver\Forum\Models;

use BaseModel;

class Threads{
    protected $table = 'threads';

    public function messages()
    {
        return $this->hasMany(new Messages());
    }

    public function category()
    {
        return $this->belongsTo(new Categories());
    }
}