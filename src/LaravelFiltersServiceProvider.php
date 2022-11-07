<?php

namespace Easyagency\LaravelFilters;

use Illuminate\Support\ServiceProvider;
use Easyagency\LaravelFilters\Console\FilterMakeCommand;

class LaravelFiltersServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            FilterMakeCommand::class
        ]);
    }
}