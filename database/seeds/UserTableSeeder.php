<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();

		DB::table('users')->insert([
								'email' => 'rezd14@gmail.com',
								'password' => Hash::make('rahasia123'),
								'name' => 'Didik Tri',
								'address' => 'Jl patimura 1 Kraksaan',
								'phone' => '085258061570',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
								]);
		DB::table('users')->insert([
								'email' => 'johndoe@gmail.com',
								'password' => Hash::make('rahasia123'),
								'name' => 'John Doe',
								'address' => 'Silicon valley',
								'phone' => '12345678',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
								]);
	}
}
