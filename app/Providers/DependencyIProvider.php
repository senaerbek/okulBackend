<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

class DependencyIProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('App\UploadFiles\IUpload', 'App\UploadFiles\Upload');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}