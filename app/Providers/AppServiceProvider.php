<?php
namespace App\Providers;

use App\Http\AreasNegocio\CAD\ILocationCAD;
use App\Http\AreasNegocio\CAD\IProdutoCAD;
use App\Http\AreasNegocio\CAD\IServiceLogsCAD;
use App\Http\AreasNegocio\CAD\IUserManagementCAD;
use App\Http\AreasNegocio\CAD\LocationCAD;
use App\Http\AreasNegocio\CAD\ProdutoCAD;
use App\Http\AreasNegocio\CAD\ServiceLogsCAD;
use App\Http\AreasNegocio\CAD\UserManagementCAD;
use App\Http\AreasNegocio\CAN\ILocationCAN;
use App\Http\AreasNegocio\CAN\IProdutoCAN;
use App\Http\AreasNegocio\CAN\IServiceLogsCAN;
use App\Http\AreasNegocio\CAN\IUserManagementCAN;
use App\Http\AreasNegocio\CAN\LocationCAN;
use App\Http\AreasNegocio\CAN\ProdutoCAN;
use App\Http\AreasNegocio\CAN\ServiceLogsCAN;
use App\Http\AreasNegocio\CAN\UserManagementCAN;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(ILocationCAD::class, LocationCAD::class);
        App::bind(ILocationCAN::class, LocationCAN::class);
        App::bind(IServiceLogsCAD::class, ServiceLogsCAD::class);
        App::bind(IServiceLogsCAN::class, ServiceLogsCAN::class);
        App::bind(IProdutoCAD::class, ProdutoCAD::class);
        App::bind(IProdutoCAN::class, ProdutoCAN::class);
        App::bind(IUserManagementCAD::class, UserManagementCAD::class);
        App::bind(IUserManagementCAN::class, UserManagementCAN::class);
    }
}
