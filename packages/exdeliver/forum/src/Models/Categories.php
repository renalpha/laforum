<?php

namespace Exdeliver\Forum\Models;

class Categories extends BaseModel{
    protected $table = 'forums_categories';

    public function threads()
    {
        return $this->hasMany(new Threads());
    }

    public function messages()
    {
        return $this->hasMany(new Messages());
    }
}