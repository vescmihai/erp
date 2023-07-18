<?php

use App\Http\Controllers\AdministrativoApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitaApiController;
use App\Http\Controllers\CitaDoctorApiController;
use App\Http\Controllers\CitaUserApiController;
use App\Http\Controllers\ConsultaApiController;
use App\Http\Controllers\ConsultorioDoctorApiController;
use App\Http\Controllers\ConsultorioUserApiController;
use App\Http\Controllers\DoctorApiController;
use App\Http\Controllers\EspecialidadApiController;
use App\Http\Controllers\HistoriaClinicaApiController;
use App\Http\Controllers\HistoriaClinicaDoctorApiController;
use App\Http\Controllers\HistoriaClinicaUserApiController;
use App\Http\Controllers\HojaConsultaApiController;
use App\Http\Controllers\HorarioApiController;
use App\Http\Controllers\MedicamentoApiController;
use App\Http\Controllers\PacienteApiController;
use App\Http\Controllers\RecetaApiController;
use App\Http\Controllers\RecetaMedicaApiController;
use App\Http\Controllers\RecetaMedicaDoctorApiController;
use App\Http\Controllers\RecetaMedicaUserApiController;
use App\Http\Controllers\TratamientoApiController;
use App\Http\Controllers\TurnoApiController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('auth/login',[AuthController::class,'login']);

Route::middleware(['auth.api:sanctum'])->group(function(){

Route::apiResource('citas',CitaApiController::class);
Route::apiResource('doctores',DoctorApiController::class);
Route::apiResource('especialidades',EspecialidadApiController::class);
Route::apiResource('historiaClinicas',HistoriaClinicaApiController::class);
Route::apiResource('historiaClinicasUser',HistoriaClinicaUserApiController::class);
Route::apiResource('historiaClinicasDoctor',HistoriaClinicaDoctorApiController::class);
Route::apiResource('recetas',RecetaApiController::class);
Route::apiResource('recetasMedicas',RecetaMedicaApiController::class);
Route::apiResource('recetasMedicasUser',RecetaMedicaUserApiController::class);
Route::apiResource('recetasMedicasDoctor',RecetaMedicaDoctorApiController::class);
Route::apiResource('users',UserApiController::class);
Route::apiResource('horario',HorarioApiController::class);
Route::apiResource('hojaConsulta',HojaConsultaApiController::class);
Route::apiResource('consultas',ConsultaApiController::class);
Route::apiResource('consultorioUser',ConsultorioUserApiController::class);
Route::apiResource('consultorioDoctor',ConsultorioDoctorApiController::class);
Route::apiResource('pacientes',PacienteApiController::class);
Route::apiResource('administrativo',AdministrativoApiController::class);
Route::apiResource('citasUser',CitaUserApiController::class);
Route::apiResource('citasDoctor',CitaDoctorApiController::class);
Route::apiResource('medicamentos',MedicamentoApiController::class);
Route::apiResource('turnos',TurnoApiController::class);
Route::apiResource('tratamiento',TratamientoApiController::class);
Route::get('auth/logout',[AuthController::class,'logout']);

});
