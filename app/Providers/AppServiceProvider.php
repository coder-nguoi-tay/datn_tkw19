<?php

namespace App\Providers;

use App\Repositories\Admin\AdminInterface;
use App\Repositories\Admin\AdminRepository;
use App\Repositories\News\NewsInterface;
use App\Repositories\News\NewsRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AdminInterface::class, AdminRepository::class);
        $this->app->bind(NewsInterface::class, NewsRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
