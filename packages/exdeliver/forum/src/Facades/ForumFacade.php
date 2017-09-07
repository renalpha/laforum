<?php namespace Exdeliver\Forum\Facades;

use Illuminate\Support\Facades\Facade;

class ForumFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'forumservice';
    }
}