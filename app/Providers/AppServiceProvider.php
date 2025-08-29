<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('assetPath', function ($path) {
            $assetPath = config('app.asset_path', '');

            return "<?php
                \$fullPath = public_path('$assetPath' . $path);
                echo asset('$assetPath' . $path) . (file_exists(\$fullPath) ? '?v=' . filemtime(\$fullPath) : '');
            ?>";
        });
    }
}
