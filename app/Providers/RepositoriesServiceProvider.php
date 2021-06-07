<?php

namespace App\Providers;

use App\Repositories\BookRepositoriesInterface;
use App\Repositories\BookRepository;
use App\Repositories\BookRepositoryInterface;
use App\Repositories\BuyLinkRepository;
use App\Repositories\BuyLinkRepositoryInterface;
use App\Repositories\ListRepositories;
use App\Repositories\ListRepositoriesInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(BookRepositoryInterface::class,BookRepository::class);
        $this->app->bind(ListRepositoriesInterface::class,ListRepositories::class);
        $this->app->bind(BuyLinkRepositoryInterface::class,BuyLinkRepository::class);
    }
}
