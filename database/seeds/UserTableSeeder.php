<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'name' => 'Administrador',
    		'email'=> 'admin@admin.es',
    		'is_admin'=> 1,
    		'password' =>bcrypt('secrets'),
    		]);
    	DB::table('users')->insert([
    		'name' => 'Usuario',
    		'email'=> 'usuario@usuario.es',
    		'is_admin'=> 0,
    		'password' =>bcrypt('nosecrets'),
    		]);
        //
    }
}
