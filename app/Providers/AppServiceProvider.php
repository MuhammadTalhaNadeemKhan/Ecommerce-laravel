<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
// use App\Models\frontend\Blog;

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
    // public function boot()
    // {
    //     // Share $blogs to all views globally
    //     View::share('blogs', Blog::all());
    // }
}
