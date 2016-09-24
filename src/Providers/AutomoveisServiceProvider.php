<?php

namespace Automoveis\Providers;

use Illuminate\Routing\Router;
use BW\Router\Router as BwRouter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class AutomoveisServiceProvider extends ServiceProvider
{

    public function boot(Router $router)
    {
        //
        parent::boot($router);

        //
        $this->publishes([__DIR__ . '/../../config.php' => config_path('/automoveis.php')], 'config');
        $this->publishes([__DIR__ . '/../../public' => public_path('packages/eliasrosa/bw-com-automoveis')], 'public');
        $this->publishes([__DIR__ . '/../../database/migrations' => database_path('migrations')], 'migrations');
    }

    public function register()
    {
        \View::addNamespace('Automoveis', __DIR__ . '/../../views');

        //
        \MagicRelationships::register('automoveis.magic-relationship');
    }

    public function map(Router $router)
    {
        $router->group(BwRouter::getParameters('default'), function (Router $router) {
            require __DIR__ . '/../../routes.php';
        });
    }
}
