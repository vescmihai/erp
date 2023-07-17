<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\InternacionController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\MedicamentoController;
use App\Http\Controllers\RecetaMedicaController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\HistoriaClinicaController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\QuirofanoController;
use App\Http\Controllers\ReservaQuirofanoController;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ReservaConsultorioController;
use App\Http\Controllers\SalaDeEmergenciaController;
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
Route::group(['middleware' => ['auth']], function () {
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
    Route::resource('bitacora', BitacoraController::class)->names('bitacora');
    Route::resource('expedientes', ExpedienteController::class);
    Route::resource('hojaConsultas', HojaConsultaController::class);
    Route::resource('consulta', ConsultaController::class);
    Route::resource('horarios', HorariosController::class);
    Route::resource('internacion', InternacionController::class);
    Route::resource('receta', RecetaController::class);
    Route::resource('medicamento', MedicamentoController::class);
    Route::resource('recetamedica', RecetaMedicaController::class);
    Route::resource('historiaclinica', HistoriaClinicaController::class);
    Route::resource('quirofano', QuirofanoController::class);
    Route::resource('reservaquirofano', ReservaQuirofanoController::class);
    Route::resource('consultorio', ConsultorioController::class);
    Route::resource('reservaconsultorio', ReservaConsultorioController::class);
    Route::resource('salasEmergencia', SalaDeEmergenciaController::class);
    Route::resource('productos', ProductosController::class);
    Route::resource('proveedores', ProveedoresController::class);

    Route::get('historiaclinica/pdf/{historiaClinica}', 'App\Http\Controllers\HistoriaClinicaController@pdf')->name('historiaclinica.pdf');
    Route::get('pacientes/pdf/{pacientes}', 'App\Http\Controllers\PacienteController@pdf')->name('pacientes.pdf');
    Route::get('citas/pdf/{citas}', 'App\Http\Controllers\CitaController@pdf')->name('cita.pdf');
    Route::get('personals/pdf/{personals}', 'App\Http\Controllers\PersonalController@pdf')->name('personal.pdf');
    Route::get('doctors/pdf/{doctors}', 'App\Http\Controllers\DoctorController@pdf')->name('doctors.pdf');
    Route::get('consulta/pdf/{consulta}', 'App\Http\Controllers\ConsultaController@pdf')->name('consulta.pdf');
    Route::get('hojas/pdf/{hojas}', 'App\Http\Controllers\HojaConsultaController@pdf')->name('hojaConsultas.pdf');
    Route::get('recetamedicas/pdf/{recetamedicas}', 'App\Http\Controllers\RecetaMedicaController@pdf')->name('recetamedica.pdf');

    Route::post('/backup', [BackupController::class, 'create'])->name('backup.create');
    Route::get('/backup/download/{fileName}', [BackupController::class, 'download'])->name('backup.download');
    Route::post('/backup/restore-database', [BackupController::class, 'restoreDatabase'])->name('backup.restoreDatabase');

});
