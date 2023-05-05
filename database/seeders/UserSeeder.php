<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name'=>'Mihai',
            'email'=>'mihai@gmail.com',
            'password'=>Hash::make('12345678')
            
        ]);

        $rol = Role::create(['name' => 'Administrador']);
        $permisos = Permission::pluck('id', 'id')->all();
        $rol->syncPermissions($permisos);
        $usuario->assignRole($rol->id);
    }
}
