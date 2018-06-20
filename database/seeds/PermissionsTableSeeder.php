<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuarios
        Permission::create([
            'name'=> 'Navega entre Usuarios',
            'slug'=> 'users.index',
            'description'=> 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'=> 'Ver Detalle de usuario',
            'slug'=> 'users.show',
            'description'=> 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
            'name'=> 'Edicion de Usuarios',
            'slug'=> 'users.edit',
            'description'=> 'Edita cualquier dato de usuarios del sistema',
        ]);
        Permission::create([
            'name'=> 'Eliminar Usuarios',
            'slug'=> 'users.destroy',
            'description'=> 'Eliminar cualquier usuario sistema',
        ]);
        //Roles
        Permission::create([
            'name'=> 'Navega entre roles',
            'slug'=> 'roles.index',
            'description'=> 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
            'name'=> 'Ver Detalle del rol',
            'slug'=> 'roles.show',
            'description'=> 'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'=> 'Edicion de roles',
            'slug'=> 'roles.create',
            'description'=> 'Edita cualquier dato de roles del sistema',
        ]);
        Permission::create([
            'name'=> 'Edicion de roles',
            'slug'=> 'roles.edit',
            'description'=> 'Edita cualquier dato de roles del sistema',
        ]);
        Permission::create([
            'name'=> 'Eliminar roles',
            'slug'=> 'roles.destroy',
            'description'=> 'Eliminar cualquier rol sistema',
        ]);
                //Productos
        Permission::create([
            'name'=> 'Navega entre productos',
            'slug'=> 'products.index',
            'description'=> 'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
            'name'=> 'Ver Detalle del productos',
            'slug'=> 'products.show',
            'description'=> 'Ver en detalle cada productos del sistema',
        ]);
        Permission::create([
            'name'=> 'Edicion de productos',
            'slug'=> 'products.create',
            'description'=> 'Edita cualquier dato de productos del sistema',
        ]);
        Permission::create([
            'name'=> 'Edicion de productos',
            'slug'=> 'products.edit',
            'description'=> 'Edita cualquier dato de productos del sistema',
        ]);
        Permission::create([
            'name'=> 'Eliminar productos',
            'slug'=> 'products.destroy',
            'description'=> 'Eliminar cualquier productos sistema',
        ]);
    }
}
