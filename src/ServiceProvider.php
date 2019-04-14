<?php

namespace Bgaze\Crud\Themes\Vue;

use Illuminate\Support\ServiceProvider as Base;
use Bgaze\Crud\Support\ThemeProviderTrait;
use Bgaze\Crud\Themes\Vue\Crud;

/**
 * The package service provider
 *
 * @author bgaze <benjamin@bgaze.fr>
 */
class ServiceProvider extends Base {

    use ThemeProviderTrait;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        // Register & publish theme.
        $this->registerTheme(Crud::class, 'Generate a Vue.js CRUD', __DIR__ . '/Views');
    }

}
