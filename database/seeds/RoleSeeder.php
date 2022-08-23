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
        Permission::create(['name' => 'admin.egresados.show'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.empresas.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.empresas.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.empresas.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.empresas.destroy'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.empresas.show'])->syncRoles([$role1]);
 
        Permission::create(['name' => 'admin.vacantes.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.vacantes.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.vacantes.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.vacantes.destroy'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.vacantes.show'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.niveles.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.niveles.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.niveles.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.niveles.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.carreras.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.carreras.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.carreras.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.carreras.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.generaciones.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.generaciones.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.generaciones.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.generaciones.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.areas.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.areas.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.areas.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.areas.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.giros.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.giros.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.giros.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.giros.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.actividades.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.actividades.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.actividades.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.actividades.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.areas-vacantes.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.areas-vacantes.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.areas-vacantes.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.areas-vacantes.destroy'])->syncRoles([$role1]);
    
    }

}
