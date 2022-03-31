<?php

namespace Modules\Backend\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Backend\Contracts\PostContract;
use Modules\Backend\Repositories\PostRepository;

class PostRepositoryProvider extends ServiceProvider
{

    protected $repositories = [
        PostContract::class => PostRepository::class
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $repository) {
            $this->app->bind($interface,$repository);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
