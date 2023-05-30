<?php

use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\HojaConsultaController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('pacientes', PacienteController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('personal', PersonalController::class);
    Route::resource('turno', TurnoController::class); 
    Route::resource('cita', CitaController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('especialidades', EspecialidadController::class);
    Route::resource('salas', SalaController::class);
    Route::resource('sectores', SectorController::class);
    Route::resource('bitacora',BitacoraController::class)->names('bitacora');
    Route::resource('expedientes', \App\Http\Controllers\ExpedienteController::class);
    Route::resource('hojaConsulta', HojaConsultaController::class);

});
