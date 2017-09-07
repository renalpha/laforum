<?php

namespace Exdeliver\Forum;

use Illuminate\Support\ServiceProvider;

class ForumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Exdeliver\Forum\Controllers\ForumController');

        $this->app->bind('forumservice', 'Exdeliver\Forum\Services\ForumService'); // bind service
        $this->app->bind('threadservice', 'Exdeliver\Forum\Services\ThreadService'); // bind service
        $this->app->bind('messageservice', 'Exdeliver\Forum\Services\MessageService'); // bind service

        $this->loadViewsFrom(__DIR__.'/Views', 'forum');
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
    }
}
