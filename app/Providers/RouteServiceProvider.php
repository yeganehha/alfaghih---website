<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->namespace('Api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware(['web' ,'auth:admin', 'admin'])
                ->prefix('gwc')
                ->as('admin:')
                ->group(base_path('routes/admin.php'));

            Route::middleware(['web', 'admin' ])
                ->prefix('gwc')
                ->as('admin:')
                ->namespace('App\Http\Controllers\Admin')
                ->group(function (){
                    // Authentication Routes...
                    $this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
                    $this->post('login', 'Auth\LoginController@login')->name('auth.login.process');
                    $this->get('logout', 'Auth\LoginController@logout')->name('auth.logout');

                    // Password Reset Routes...
                    $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
                    $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.forgot.process');
                    $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
                    $this->post('password/reset', 'Auth\ResetPasswordController@reset');
                });
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
