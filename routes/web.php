<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Livewire\Proveedor\ShowProveedor;
use App\Http\Controllers\LaboratorioController;
use App\Http\Livewire\LaboratorioShowLaboratorio;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('index', 'drogueria.template.index3')->name('index');
Route::view('principal', 'drogueria.template.index')->name('principal');
Route::resource('usuario', UsuarioController::class);
Route::resource('laboratorio', LaboratorioController::class);
Route::resource('categoria', CategoriaController::class);
Route::resource('proveedor', ProveedorController::class);
Route::get('prueba', ShowProveedor::class);
Route::get('prueba2', LaboratorioShowLaboratorio::class);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('drogueria.template.index');
    })->name('dashboard');
});
