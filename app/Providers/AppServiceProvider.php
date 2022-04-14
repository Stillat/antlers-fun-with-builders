<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;

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
        // Statamic::script('app', 'cp');
        // Statamic::style('app', 'cp');
        view()->composer('home', function ($view) {
            $current = $view->getData();
            
            $view->with([
                'nested' => [
                    'the_topics' => $current['the_topics'],
                ],
            ]);
        });
    }
}
