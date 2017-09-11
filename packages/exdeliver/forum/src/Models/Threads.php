<?php

namespace Exdeliver\Forum\Models;

class Threads extends BaseModel{
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