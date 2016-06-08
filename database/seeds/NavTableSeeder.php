<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NavTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->truncate();
        DB::table('navs')->insert([
        	'position' => 1,
        	'name' => 'Home',
        	'url'  => '/',
        	]);
        DB::table('navs')->insert([
        	'position' => 2,
        	'name' => 'Profile',
        	'url'  => 'profile',
        	]);
        DB::table('navs')->insert([
        	'position' => 3,
        	'name' => 'Help',
        	'url'  => 'help',
        	]);
    }
}
