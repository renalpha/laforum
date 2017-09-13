<?php

namespace Exdeliver\Forum\Services;

use Exdeliver\Forum\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Exdeliver\Forum\Models\Settings;

use Exdeliver\Forum\Repositories\DynamicModelRepository;

class ForumService
{
    public function __construct()
    {

    }

    public function categories($parent_id = null)
    {
        $categories = $this->getModel(new Categories());
        if(isset($parent_id))
        {
            $categories = $categories->where('parent_id', $parent_id);
        }else{
            $categories = $categories->whereNull('parent_id');
        }

        $categories = $categories->getAll();

        return $categories;
    }

    public function getModel(Model $model)
    {
        return new DynamicModelRepository(new $model);
    }

    public function settings()
    {
        try {
            $result = new DynamicModelRepository(new Settings());

            return $result->firstOrFail();
        } catch (\Exception $e) {
            dd($e->getMessage());
            return (object)['title' => '', 'subtitle' => ''];
        }
    }

}