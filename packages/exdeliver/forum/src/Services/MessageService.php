<?php

namespace Exdeliver\Forum\Services;

use Exdeliver\Forum\Models\Messages;

class MessageService
{
    public $message_repository;

    public function __construct()
    {
        $this->message_repository = \ForumService::getModel(new Messages());
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