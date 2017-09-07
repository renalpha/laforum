<?php

namespace Exdeliver\Forum\Services;

use Exdeliver\Forum\Repositories\DynamicModelRepository;

class ThreadService
{
    public $thread_repository;

    public function __construct()
    {
        $model = new \Exdeliver\Forum\Models\Threads();
        $this->thread_repository = new DynamicModelRepository($model);
    }

    public function save($data = null)
    {
        try{

        }catch(\Exception $e)
        {
            throw new \Exception('Data cannot be empty!');
        }
    }

    public function get($id = null)
    {
        $result = $this->thread_repository->get($id);

        return $result;
    }

    public function getBySlug($slug = null)
    {
        $result = $this->thread_repository->where('slug', $slug)->firstOrFail();

        return $result;
    }


}