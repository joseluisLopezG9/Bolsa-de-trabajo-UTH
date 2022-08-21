<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Observador']);

        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.egresados.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.egresados.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.egresados.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.egresados.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.empresas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.empresas.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.empresas.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.empresas.destroy'])->syncRoles([$role1]);
 
        Permission::create(['name' => 'admin.vacantes.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.vacantes.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.vacantes.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.vacantes.destroy'])->syncRoles([$role1]);
    
    }

}
