<?php

namespace Sirbizz\SoftwareLab;

use Illuminate\Support\ServiceProvider;

class SoftwareLabProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {	
    		$this->app->make('Sirbizz\SoftwareLab\SoftwareLabController');
    }
}