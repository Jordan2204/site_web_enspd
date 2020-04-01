<?php
 
namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
 
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind(
        'App\Gestion\ImgGestionInterface', 
        'App\Gestion\ImgGestion'
        );

        $this->app->bind(
        'App\Gestion\FilesGestionInterface', 
        'App\Gestion\FilesGestion'
        );
    }
}