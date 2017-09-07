<?php

namespace Exdeliver\Forum\Services;

use Exdeliver\Forum\Repositories\DynamicModelRepository;

class MessageService
{
    public $message_repository;

    public function __construct()
    {
        $model = new \Exdeliver\Forum\Models\Messages();
        $this->message_repository = new DynamicModelRepository($model);
    }

    public function save($data = null, $id = null)
    {
        try{

        }catch(\Exception $e)
        {
            throw new \Exception('Data cannot be empty!');
        }
    }

    public function getByThreadId($id = null)
    {
        return $this->message_repository->find();
    }

    public function get($id = null)
    {
        $result = $this->message_repository->get($id);

        return $result;
    }
}