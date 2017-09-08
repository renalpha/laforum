<?php

namespace Exdeliver\Forum\Services;

use Illuminate\Database\Eloquent\Model;
use Exdeliver\Forum\Repositories\DynamicModelRepository;

class ForumService
{
    public function __construct()
    {

    }

    public function getModel(Model $model)
    {
        return new DynamicModelRepository(new $model);
    }

}