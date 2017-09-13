<?php

namespace Exdeliver\Forum\Models;

class Categories extends BaseModel{
    protected $table = 'forum_categories';

    public function threads()
    {
        return $this->hasMany(new Threads());
    }

    public function messages()
    {
        return $this->hasMany(new Messages());
    }

    public function subcategories()
    {
        return $this->hasMany(new Categories(), 'parent_id');
    }
}