<?php

namespace App\Providers;

use App\Models\Channel;
use Database\Seeders\ChannelsTableSeeder;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

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
    public function boot(): void
    {
        view()->share('Channels', Channel::all());
    }
}
