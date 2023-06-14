<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{
    public function create()
    {
        try {
            // Ejecutar el comando de respaldo de Laravel
            Artisan::call('backup:run');
            
            return back()->with('success', 'Respaldo creado con éxito');
        } catch (\Exception $e) {
            return back()->with('error', 'Hubo un error al crear el respaldo: ' . $e->getMessage());
        }
    }
}

