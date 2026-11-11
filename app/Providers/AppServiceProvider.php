<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Marca;
use Illuminate\Support\Facades\View;

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
        View::composer('components.sidebar', function ($view) {

            $marcas = Marca::orderBy('nome')->get();

            $view->with('marcas', $marcas);
        });
    }
}
