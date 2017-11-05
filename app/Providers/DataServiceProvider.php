<?php

namespace App\Providers;

use App\Services\DataService;
use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider {

    /** Bootstrap the application services.
     * @return void
     */
    public function boot() {
        //
    }

    /** Register the application services.
     * @return void
     */
    public function register() {
        $this->app->singleton(DataService::class, function ($app) {
            return new DataService();
        });
    }
}
