<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();
        Role::create([
            'name'=>'Admin',
            'slug'=>'admin',
            'special'=>'all-access'
        ]);
        DB::table('users')->insert([
            'name'=>'josue',
            'email'=>'josue_luistj@hotmail.com',
            'password'=>bcrypt('123456'),
        ]);
        DB::table('role_user')->insert([
            'role_id'=>'1',
            'user_id'=>'21',
        ]);
        DB::table('categorias')->insert([
            'name'=>'prueba',
            'description'=>'esta es una categoria de prueba',
        ]);
        DB::table('almacens')->insert([
            'name'=>'principal',
            'direccion'=>'av. siempre viva 123',
            'responsable'=>'jos',
            'telefono'=>'9999999',
        ]);
        
    }
}
