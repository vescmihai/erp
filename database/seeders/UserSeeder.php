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
            'name'=>'Gino',
            'email'=>'gino@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Mihai',
            'email'=>'mihai@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Jeanette',
            'email'=>'Jeanette@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Carlos',
            'email'=>'carlos@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Cristian',
            'email'=>'cristian@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Adriana',
            'email'=>'adriana@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Manuel',
            'email'=>'manuel@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Sofia',
            'email'=>'sofi@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Dasha',
            'email'=>'Dasha@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Valentina',
            'email'=>'valet@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $usuario = User::create([
            'name'=>'Gabriela',
            'email'=>'gabi@gmail.com',
            'password'=>Hash::make('12345678')
        ]);

        $rol = Role::create(['name' => 'Administrador']);
        $permisos = Permission::pluck('id', 'id')->all();
        $rol->syncPermissions($permisos);
        $usuario->assignRole($rol->id);

    }
}
