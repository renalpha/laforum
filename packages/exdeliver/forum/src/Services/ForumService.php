<?php

namespace Exdeliver\Forum\Services;

use Illuminate\Database\Eloquent\Model;
use Exdeliver\Forum\Models\Settings;

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