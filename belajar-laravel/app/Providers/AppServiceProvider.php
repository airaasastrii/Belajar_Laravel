<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Category;
use Illuminate\Support\Facades\View;
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
        $settings = Setting::pluck('value', 'key');
        // pluck itu untuk manggil tanpa value(->value), pasti bentuk nya array assosiative
        View::share('settings', $settings);

        $categories = Category::all();
        View::share('categories', $categories);
    }
}
