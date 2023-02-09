<?php

namespace Hankin\LaravelRemark;

use Illuminate\Support\ServiceProvider;

class RemarkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $config_file = __DIR__ . "/../config/remark.php";

        $this->publishes([
            $config_file => config_path('remark.php')
        ], 'config');

        $this->mergeConfigFrom($config_file, 'remark');

        if(!class_exists('CreateRemarksTable')){
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__ . '/../database/migrations/create_remarks_table.php.stub' =>
                    database_path("migrations/{$timestamp}__create__rewards_table.php")
            ], 'migrations');
        }
    }
}
