<?php

namespace App\Providers;

use App\Livewire\companies\CompanyIndex;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
          }

          Livewire::component('companies.company-index', CompanyIndex::class);
    }
}
