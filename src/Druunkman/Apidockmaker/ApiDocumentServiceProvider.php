<?php

namespace Druunkman\Apidockmaker;

use Illuminate\Support\ServiceProvider;

class ApiDocumentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Druunkman\Apidockmaker\ApiDocumentController');
        $this->loadViewsFrom(__DIR__.'/views', 'apidocmaker');

    }
}
