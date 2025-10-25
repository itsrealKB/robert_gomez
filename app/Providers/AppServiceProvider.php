<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
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
        Paginator::useBootstrap();

        // Formatting Money.
        Blade::directive('moneyFormat', function ($expression) {
            return "<?php
                \$amount = {$expression};
                if (\$amount >= 1000000) {
                    echo '$' . number_format(\$amount / 1000000, 3, '.', '') . 'M';
                } elseif (\$amount >= 1000) {
                    echo '$' . number_format(\$amount / 1000, 3, '.', '') . 'K';
                } else {
                    echo '$' . number_format(\$amount, 2);
                }
            ?>";
        });

    }
}
