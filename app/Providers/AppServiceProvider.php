<?php

namespace App\Providers;

use App\Actions\ActivityAction;
use App\Models\ProjectsModel;
use App\Observers\ProjectsObserver;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;


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
        Voyager::addAction(ActivityAction::class);
    }
}
