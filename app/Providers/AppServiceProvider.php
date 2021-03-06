<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Whitecube\NovaPage\Pages\Manager;

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
    public function boot(Manager $pages)
    {
        Schema::defaultStringLength(100);
        $pages->registerOption('Infos', \App\Nova\Templates\Infos::class);
    }
}
