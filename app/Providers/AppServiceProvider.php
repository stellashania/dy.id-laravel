<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
                /*
        |--------------------------------------------------------------------------
        | Extend blade so we can define a variable
        | <code>
        | @define $variable = "whatever"
        | </code>
        |--------------------------------------------------------------------------
        */

        \Blade::extend(function($value) {
            return preg_replace('/\@define(.+)/', '<?php ${1}; ?>', $value);
        });
    }


}
