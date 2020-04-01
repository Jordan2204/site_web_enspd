<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapRespcomRoutes();

        $this->mapRespecoledoctRoutes();

        $this->mapDoyenRoutes();

        $this->mapRespcentincRoutes();

        $this->mapRespdeptRoutes();

        $this->mapRespformRoutes();
 
        $this->mapAdminRoutes();

        //
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' => ['web', 'admin', 'auth:admin'],
            'prefix' => 'admin',
            'as' => 'admin.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

   
    /**
     * Define the "respform" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapRespformRoutes()
    {
        Route::group([
            'middleware' => ['web', 'respform', 'auth:respform'],
            'prefix' => 'respform',
            'as' => 'respform.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/respform.php');
        });
    }

    /**
     * Define the "respdept" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapRespdeptRoutes()
    {
        Route::group([
            'middleware' => ['web', 'respdept', 'auth:respdept'],
            'prefix' => 'respdept',
            'as' => 'respdept.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/respdept.php');
        });
    }

    /**
     * Define the "respcentinc" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapRespcentincRoutes()
    {
        Route::group([
            'middleware' => ['web', 'respcentinc', 'auth:respcentinc'],
            'prefix' => 'respcentinc',
            'as' => 'respcentinc.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/respcentinc.php');
        });
    }

    /**
     * Define the "doyen" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapDoyenRoutes()
    {
        Route::group([
            'middleware' => ['web', 'doyen', 'auth:doyen'],
            'prefix' => 'doyen',
            'as' => 'doyen.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/doyen.php');
        });
    }

    /**
     * Define the "respecoledoct" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapRespecoledoctRoutes()
    {
        Route::group([
            'middleware' => ['web', 'respecoledoct', 'auth:respecoledoct'],
            'prefix' => 'respecoledoct',
            'as' => 'respecoledoct.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/respecoledoct.php');
        });
    }

    /**
     * Define the "respcom" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapRespcomRoutes()
    {
        Route::group([
            'middleware' => ['web', 'respcom', 'auth:respcom'],
            'prefix' => 'respcom',
            'as' => 'respcom.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/respcom.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
