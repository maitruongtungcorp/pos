<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // PUBLISH ASSETS FOR TEMPLATE
        $themeName = \Theme::get();
        $themeAssetsPath = base_path() . '/Themes/' . $themeName . '/assets';
        $this->publishes([
            $themeAssetsPath => public_path("vendor/{$themeName}"),
        ], 'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
