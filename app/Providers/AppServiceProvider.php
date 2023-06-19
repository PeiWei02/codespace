<?php

namespace App\Providers;

use App\Models\Forum\Channel;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

    //responsible for sharing data with views
    public function boot(): void
    {
        FacadesView::share('channels', Channel::all());
    }
}
