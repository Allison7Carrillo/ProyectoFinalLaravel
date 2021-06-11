<?php

namespace Database\Seeders;

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
        $role1= Role::create(['name' => 'Admin']);
        $role2= Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'home']) -> syncRoles([$role1, $role2]);
        
        //Usuarios
        Permission::create(['name' => 'usuarios.edit'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuarios.update'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuarios.show'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuarios.destroy'])-> syncRoles([$role1, $role2]);
        //proveedores
        Permission::create(['name' => 'proveedores.index'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'proveedores.create'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'proveedores.edit'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'proveedores.destroy'])-> syncRoles([$role1, $role2]);
        //productos
        Permission::create(['name' => 'productos.index'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'productos.create'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'productos.edit'])-> syncRoles([$role1, $role2]);
        Permission::create(['name' => 'productos.destroy'])-> syncRoles([$role1, $role2]);
    }
}
