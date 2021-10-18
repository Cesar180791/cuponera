<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HeadingController;
use App\Http\Livewire\RolesController;
use App\Http\Livewire\PermisosController;
use App\Http\Livewire\AsignarController;
use App\Http\Livewire\UsersController;
use App\Http\Livewire\CompanyController;
use App\Http\Livewire\EditCompanyController;
use App\Http\Livewire\BranchManagerController; 
use App\Http\Livewire\CouponCreatorController;     
use App\Http\Livewire\ViewCouponCompanyController;
use App\Http\Livewire\ViewTicketAdminController;
use App\Http\Livewire\PostClienteController;
use App\Http\Livewire\TickeClienteController;
use App\Http\Livewire\ViewClienteAdminController;
use App\Http\Livewire\TickeClienteViewAdminController;
use App\Http\Livewire\BranchClerkController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function (){

/*Route::group(['middleware' => ['role:Administrador']], function () {*/
    Route::get('roles', RolesController::class);
    Route::get('permisos', PermisosController::class);
    Route::get('asignar', AsignarController::class);
    Route::get('usuarios', UsersController::class);
    Route::get('admin-empresas', CompanyController::class);
    Route::get('empresas', EditCompanyController::class);
    Route::get('rubros', HeadingController::class);
    Route::get('clientes', ViewClienteAdminController::class);
    Route::get('clientes/cupones/{idCliente}', TickeClienteViewAdminController::class);
    Route::get('admin-empresas/cupones/empresa/{idEmpresa}', ViewTicketAdminController::class);
/*});*/

/*Route::group(['middleware' => ['role:Empresa']], function () {*/
    Route::get('dependientes-sucursal', BranchManagerController::class);
    Route::get('creador-cupon', CouponCreatorController::class);
    Route::get('ver-cupon', ViewCouponCompanyController::class);
/*});*/

/*Route::group(['middleware' => ['role:Cliente']], function () {*/
    Route::get('home-cliente', PostClienteController::class);
    Route::get('ticket-cliente', TickeClienteController::class);
/*});*/

/*Route::group(['middleware' => ['role:Dependientes_Sucursal']], function () {*/
    Route::get('cobrar-cupon', BranchClerkController::class);
/*});*/

});


