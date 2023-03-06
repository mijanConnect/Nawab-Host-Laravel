<?php

namespace App\Providers;

use App\Services\WHMCS;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Schema::defaultStringLength(191);

        View::share('whmcs', [
            'announcement' => data_get(WHMCS::GetAnnouncements(['limitnum' => 1]), 'announcements.announcement.0'),
        ]);
    }
}
