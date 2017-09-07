<?php

namespace Exdeliver\Forum\Services;

class ForumService
{
    public $message_repository;
    public $thread_repository;

    public function __construct()
    {
        $thread = new \Exdeliver\Forum\Models\Threads();
        $message = new \Exdeliver\Forum\Models\Messages();

        $this->thread_repository = new DynamicModelRepository($thread);
        $this->message_repository = new DynamicModelRepository($message);
    }

}