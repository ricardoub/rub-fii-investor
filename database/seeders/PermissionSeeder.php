<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->role();
        $this->permission();
        $this->user();

        $this->fii();
    }

    private function role()
    {
        $list = Permission::updateOrCreate(
            ['name' => 'ROLE_LIST'],
            [
                'name' => 'ROLE_LIST',
                'display_name' => 'LISTAR PERFIL',
                'description' => 'Listar perfil',
            ]
        );
        $show = Permission::updateOrCreate(
            ['name' => 'ROLE_SHOW'],
            [
                'name' => 'ROLE_SHOW',
                'display_name' => 'EXIBIR PERFIL',
                'description' => 'Exibir perfil',
            ]
        );
        $insert = Permission::updateOrCreate(
            ['name' => 'ROLE_INSERT'],
            [
                'name' => 'ROLE_INSERT',
                'display_name' => 'INCLUIR PERFIL',
                'description' => 'Incluir perfil',
            ]
        );
        $update = Permission::updateOrCreate(
            ['name' => 'ROLE_UPDATE'],
            [
                'name' => 'ROLE_UPDATE',
                'display_name' => 'ALTERAR PERFIL',
                'description' => 'Alterar perfil',
            ]
        );
        $delete = Permission::updateOrCreate(
            ['name' => 'ROLE_DELETE'],
            [
                'name' => 'ROLE_DELETE',
                'display_name' => 'EXCLUIR PERFIL',
                'description' => 'Excluir perfil',
            ]
        );
    }
    private function permission()
    {
        $list = Permission::updateOrCreate(
            ['name' => 'PERMISSION_LIST'],
            [
                'name' => 'PERMISSION_LIST',
                'display_name' => 'LISTAR PERMISSAO',
                'description' => 'Listar permissão',
            ]
        );
        $show = Permission::updateOrCreate(
            ['name' => 'PERMISSION_SHOW'],
            [
                'name' => 'PERMISSION_SHOW',
                'display_name' => 'EXIBIR PERMISSAO',
                'description' => 'Exibir permissão',
            ]
        );
        $insert = Permission::updateOrCreate(
            ['name' => 'PERMISSION_INSERT'],
            [
                'name' => 'PERMISSION_INSERT',
                'display_name' => 'INCLUIR PERMISSAO',
                'description' => 'Incluir permissão',
            ]
        );
        $update = Permission::updateOrCreate(
            ['name' => 'PERMISSION_UPDATE'],
            [
                'name' => 'PERMISSION_UPDATE',
                'display_name' => 'ALTERAR PERMISSAO',
                'description' => 'Alterar permissão',
            ]
        );
        $delete = Permission::updateOrCreate(
            ['name' => 'PERMISSION_DELETE'],
            [
                'name' => 'PERMISSION_DELETE',
                'display_name' => 'EXCLUIR PERMISSAO',
                'description' => 'Excluir permissão',
            ]
        );
    }
    private function user()
    {
        $list = Permission::updateOrCreate(
            ['name' => 'USER_LIST'],
            [
                'name' => 'USER_LIST',
                'display_name' => 'LISTAR USUARIO',
                'description' => 'Listar usuário',
            ]
        );
        $show = Permission::updateOrCreate(
            ['name' => 'USER_SHOW'],
            [
                'name' => 'USER_SHOW',
                'display_name' => 'EXIBIR USUARIO',
                'description' => 'Exibir usuário',
            ]
        );
        $insert = Permission::updateOrCreate(
            ['name' => 'USER_INSERT'],
            [
                'name' => 'USER_INSERT',
                'display_name' => 'INCLUIR USUARIO',
                'description' => 'Incluir usuário',
            ]
        );
        $update = Permission::updateOrCreate(
            ['name' => 'USER_UPDATE'],
            [
                'name' => 'USER_UPDATE',
                'display_name' => 'ALTERAR USUARIO',
                'description' => 'Alterar usuário',
            ]
        );
        $delete = Permission::updateOrCreate(
            ['name' => 'USER_DELETE'],
            [
                'name' => 'USER_DELETE',
                'display_name' => 'EXCLUIR USUARIO',
                'description' => 'Excluir usuário',
            ]
        );
        $owner = Permission::updateOrCreate(
            ['name' => 'USER_OWNER'],
            [
                'name' => 'USER_OWNER',
                'display_name' => 'PROPRIO USUARIO',
                'description' => 'Manter o próprio usuário',
            ]
        );
    }

    private function fii()
    {
        $list = Permission::updateOrCreate(
            ['name' => 'FII_LIST'],
            [
                'name' => 'FII_LIST',
                'display_name' => 'LISTAR FII',
                'description' => 'Listar fundo imobiliário',
            ]
        );
        $show = Permission::updateOrCreate(
            ['name' => 'FII_SHOW'],
            [
                'name' => 'FII_SHOW',
                'display_name' => 'EXIBIR FII',
                'description' => 'Exibir fundo imobiliário',
            ]
        );
        $insert = Permission::updateOrCreate(
            ['name' => 'FII_INSERT'],
            [
                'name' => 'FII_INSERT',
                'display_name' => 'INCLUIR FII',
                'description' => 'Incluir fundo imobiliário',
            ]
        );
        $update = Permission::updateOrCreate(
            ['name' => 'FII_UPDATE'],
            [
                'name' => 'FII_UPDATE',
                'display_name' => 'ALTERAR FII',
                'description' => 'Alterar fundo imobiliário',
            ]
        );
        $delete = Permission::updateOrCreate(
            ['name' => 'FII_DELETE'],
            [
                'name' => 'FII_DELETE',
                'display_name' => 'EXCLUIR FII',
                'description' => 'Excluir fundo imobiliário',
            ]
        );
    }
}
