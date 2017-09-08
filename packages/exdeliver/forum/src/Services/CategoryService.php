<?php

namespace Exdeliver\Forum\Services;

use Exdeliver\Forum\Models\Categories;

class CategoryService
{
    public $message_repository;

    public function __construct()
    {
        $this->category_repository = \ForumService::getModel(new Categories());
    }

    public function save($data = null, $id = null)
    {
        try{

        }catch(\Exception $e)
        {
            throw new \Exception('Data cannot be empty!');
        }
    }
}