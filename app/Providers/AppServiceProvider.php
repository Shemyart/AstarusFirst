<?php

namespace App\Providers;

use App\Models\ProjectsModel;
use App\Observers\ProjectsObserver;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ProjectsModel::observe(ProjectsObserver::class);
    }
}
