<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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
        Gate::define('manage-users', function ($user) {
            return in_array($user->role, ['admin']);
        });

        // Set zona waktu default (opsional, tapi disarankan)
        date_default_timezone_set('Asia/Jakarta');

        // Atur locale Carbon ke Bahasa Indonesia
        Carbon::setLocale('id');
    }
}
