<?php

namespace Veiculos\Providers;

use Illuminate\Routing\Router;
use BW\Router\Router as BwRouter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class VeiculosServiceProvider extends ServiceProvider
{

    public function boot(Router $router)
    {
        //
        parent::boot($router);

        //
        $this->publishes([__DIR__ . '/../../config.php' => config_path('/veiculos.php')], 'config');
        $this->publishes([__DIR__ . '/../../database/migrations' => database_path('migrations')], 'migrations');
    }

    public function register()
    {
        \View::addNamespace('BW\Veiculos', __DIR__ . '/../../views');

        //
        \BWAdmin::registerRelationships('veiculos.magic-relationship');

        //
        \BWAdmin::registerMenu('veiculos.menu');
    }

    public function map(Router $router)
    {
        $router->group(BwRouter::getParameters('default'), function (Router $router) {
            require __DIR__ . '/../../routes.php';
        });
    }
}
