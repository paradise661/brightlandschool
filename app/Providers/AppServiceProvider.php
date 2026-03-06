<?php

namespace App\Providers;

use App\Models\Academy;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

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
        $setting = Setting::pluck('value', 'key');
        $pagemessage = Page::where('slug', 'message-from-teachers')->first();
        $messageItems = $pagemessage ? $pagemessage->items()->where('status', 1)->orderBy('order', 'asc')->get() : collect();
        $hacademy = Academy::where('status', 1)->orderBy('order', 'asc')->get();
        $social = Social::orderBy('order', 'asc')->get();

        View::share('social', $social);
        View::share('hacademy', $hacademy);
        View::share('messageItems', $messageItems);
        View::share('setting', $setting);


        Paginator::useBootstrap();
    }
}
