<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\Contracts\ProductRepository::class, \App\Repositories\Eloquent\ProductRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\CategoryRepository::class, \App\Repositories\Eloquent\CategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\AttributeRepository::class, \App\Repositories\Eloquent\AttributeRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\Contracts\AttributeValueRepository::class, \App\Repositories\Eloquent\AttributeValueRepositoryEloquent::class);
        //:end-bindings:
    }
}
