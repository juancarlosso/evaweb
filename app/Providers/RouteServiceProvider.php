<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

use Symfony\Component\Finder\Finder;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    /*public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }*/

    public function boot()
    {
        $this->configureRateLimiting();
        $this->routes(function () {
            Route::middleware('web')
                ->group(function () {
                    $this->requireRoutes('routes/web');
                });
            Route::prefix('api')
                ->middleware('api')
                ->group(function () {
                    $this->requireRoutes('routes/api');
                });
        });
    }

    /*
      *
      * @brief
      * @author Juan Carlos Salinas Ojeda
      * @param string
      * @return
      *
      */
    public function requireRoutes($path)
    {
        return collect(
            Finder::create()->in(base_path($path))->name('*.php')
        )->each(function ($file) {
            require $file->getRealPath();
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
