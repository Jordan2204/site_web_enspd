<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'respcom' => \App\Http\Middleware\RedirectIfNotRespcom::class,
        'respcom.guest' => \App\Http\Middleware\RedirectIfRespcom::class,
        'respecoledoct' => \App\Http\Middleware\RedirectIfNotRespecoledoct::class,
        'respecoledoct.guest' => \App\Http\Middleware\RedirectIfRespecoledoct::class,
        'doyen' => \App\Http\Middleware\RedirectIfNotDoyen::class,
        'doyen.guest' => \App\Http\Middleware\RedirectIfDoyen::class,
        'respcentinc' => \App\Http\Middleware\RedirectIfNotRespcentinc::class,
        'respcentinc.guest' => \App\Http\Middleware\RedirectIfRespcentinc::class,
        'respdept' => \App\Http\Middleware\RedirectIfNotRespdept::class,
        'respdept.guest' => \App\Http\Middleware\RedirectIfRespdept::class,
        'respform' => \App\Http\Middleware\RedirectIfNotRespform::class,
        'respform.guest' => \App\Http\Middleware\RedirectIfRespform::class,
        'resp_dept' => \App\Http\Middleware\RedirectIfNotRespDept::class,
        'resp_dept.guest' => \App\Http\Middleware\RedirectIfRespDept::class,
        'admin' => \App\Http\Middleware\RedirectIfNotAdmin::class,
        'admin.guest' => \App\Http\Middleware\RedirectIfAdmin::class,
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    ];
}
