<?php

namespace Edlin\Laravel;

use Edlin\Laravel\Console\Commands\CacheClearAll;

class EdlinServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            CacheClearAll::class,
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['command.cache.clear-all'];
    }
}
