<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\RolePermissionService;

class RolePermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Registrar el servicio en el contenedor de servicios
        $this->app->singleton(RolePermissionService::class, function ($app) {
            return new RolePermissionService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Inicializar servicios si es necesario
    }
}