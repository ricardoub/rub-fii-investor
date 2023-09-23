<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $visitante = Role::updateOrCreate(
            ['name' => 'VISITANTE'],
            ['name' => 'VISITANTE', 'display_name' => 'VISITANTE', 'description' => 'Usuários visitantes']
        );
        $usuario = Role::updateOrCreate(
            ['name' => 'USUARIO'],
            ['name' => 'USUARIO', 'display_name' => 'USUARIO', 'description' => 'Usuários cadastrados']
        );
        $operador = Role::updateOrCreate(
            ['name' => 'OPERADOR'],
            ['name' => 'OPERADOR', 'display_name' => 'OPERADOR', 'description' => 'Usuários com cadastro de operador']
        );
        $gestor = Role::updateOrCreate(
            ['name' => 'GESTOR'],
            ['name' => 'GESTOR', 'display_name' => 'GESTOR', 'description' => 'Usuários com cadastro de gestor']
        );
        $admin = Role::updateOrCreate(
            ['name' => 'ADMIN'],
            ['name' => 'ADMIN', 'display_name' => 'ADMIN', 'description' => 'Usuários administradores']
        );
    }
}
