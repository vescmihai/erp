<?php

use App\Http\Controllers\AdministrativoApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CitaApiController;
use App\Http\Controllers\ConsultaApiController;
use App\Http\Controllers\DoctorApiController;
use App\Http\Controllers\EspecialidadApiController;
use App\Http\Controllers\HistoriaClinicaApiController;
use App\Http\Controllers\HojaConsultaApiController;
use App\Http\Controllers\HorarioApiController;
use App\Http\Controllers\PacienteApiController;
use App\Http\Controllers\RecetaApiController;
use App\Http\Controllers\RecetaMedicaApiController;
use App\Http\Controllers\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('citas',CitaApiController::class);
// Route::apiResource('doctores',DoctorApiController::class);
// Route::apiResource('especialidades',EspecialidadApiController::class);
// Route::apiResource('historiaClinicas',HistoriaClinicaApiController::class);
// Route::apiResource('recetas',RecetaApiController::class);
// Route::apiResource('users',UserApiController::class);
// Route::apiResource('horario',HorarioApiController::class);
// Route::apiResource('hojaConsulta',HojaConsultaApiController::class);

Route::post('auth/login',[AuthController::class,'login']);

Route::middleware(['auth.api:sanctum'])->group(function(){

Route::apiResource('citas',CitaApiController::class);
Route::apiResource('doctores',DoctorApiController::class);
Route::apiResource('especialidades',EspecialidadApiController::class);
Route::apiResource('historiaClinicas',HistoriaClinicaApiController::class);
Route::apiResource('recetas',RecetaApiController::class);
Route::apiResource('recetasMedicas',RecetaMedicaApiController::class);
Route::apiResource('users',UserApiController::class);
Route::apiResource('horario',HorarioApiController::class);
Route::apiResource('hojaConsulta',HojaConsultaApiController::class);
Route::apiResource('consultas',ConsultaApiController::class);
Route::apiResource('pacientes',PacienteApiController::class);
Route::apiResource('administrativo',AdministrativoApiController::class);
Route::get('auth/logout',[AuthController::class,'logout']);

});
