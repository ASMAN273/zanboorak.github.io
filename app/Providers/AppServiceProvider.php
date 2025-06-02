<?php

namespace App\Providers;

use App\Models\Mainpage;
use App\Models\Tabligh;
use Illuminate\Pagination\Paginator;
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


        Paginator::useBootstrap();
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        $tab = Tabligh::all();
        $page = Mainpage::orderby('id', 'DESC')->paginate(6);

        return view()->share(['tab' => $tab, 'page' => $page]);
    }
}

