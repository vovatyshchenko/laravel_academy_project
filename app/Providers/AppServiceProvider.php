<?php

namespace App\Providers;

use App\Models\Position;
use App\Models\Master;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
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
        $positions = Position::all();
        view()->share('positions', $positions);

        $services = Service::all();
        view()->share('services', $services);

        $masterName = Master::all();
        view()->share('masterName', $masterName);
    }
}
