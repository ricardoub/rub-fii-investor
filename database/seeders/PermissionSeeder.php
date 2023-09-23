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
        $this->rolePermissions();
        $this->permissionPermissions();
        $this->userPermissions();
    }

    private function rolePermissions()
    {
        $list = Permission::create([
            'name' => 'role-list',
            'display_name' => 'LISTAR PERFIL',
            'description' => 'Listar perfil',
        ]);
        $show = Permission::create([
            'name' => 'role-show',
            'display_name' => 'EXIBIR PERFIL',
            'description' => 'Exibir perfil',
        ]);
        $create = Permission::create([
            'name' => 'role-create',
            'display_name' => 'INCLUIR PERFIL',
            'description' => 'Incluir perfil',
        ]);
        $edit = Permission::create([
            'name' => 'role-edit',
            'display_name' => 'ALTERAR PERFIL',
            'description' => 'Alterar perfil',
        ]);
        $delete = Permission::create([
            'name' => 'role-delete',
            'display_name' => 'EXCLUIR PERFIL',
            'description' => 'excluir perfil',
        ]);
    }
    private function permissionPermissions()
    {
        $list = Permission::create([
            'name' => 'permission-list',
            'display_name' => 'LISTAR PERMISSAO',
            'description' => 'Listar permissões',
        ]);
        $show = Permission::create([
            'name' => 'permission-show',
            'display_name' => 'EXIBIR PERMISSAO',
            'description' => 'Exibir permissão',
        ]);
        $create = Permission::create([
            'name' => 'permission-create',
            'display_name' => 'INCLUIR PERMISSAO',
            'description' => 'Incluir permissão',
        ]);
        $edit = Permission::create([
            'name' => 'permission-edit',
            'display_name' => 'ALTERAR PERMISSAO',
            'description' => 'Alterar permissão',
        ]);
        $delete = Permission::create([
            'name' => 'permission-delete',
            'display_name' => 'EXCLUIR PERMISSAO',
            'description' => 'excluir permissão',
        ]);
    }

    private function userPermissions()
    {
        $list = Permission::create([
            'name' => 'user-list',
            'display_name' => 'LISTAR USUARIO',
            'description' => 'Listar os usuários cadastrados',
        ]);
        $show = Permission::create([
            'name' => 'user-show',
            'display_name' => 'EXIBIR USUARIO',
            'description' => 'Exibir um usuário cadastrado',
        ]);
        $create = Permission::create([
            'name' => 'user-create',
            'display_name' => 'INCLUIR USUARIO',
            'description' => 'Incluir um usuário no cadastro',
        ]);
        $edit = Permission::create([
            'name' => 'user-edit',
            'display_name' => 'ALTERAR USUARIO',
            'description' => 'Alterar um usuário cadastrado',
        ]);
        $delete = Permission::create([
            'name' => 'user-delete',
            'display_name' => 'EXCLUIR USUARIO',
            'description' => 'excluir um usuário cadastrado',
        ]);
    }
}
