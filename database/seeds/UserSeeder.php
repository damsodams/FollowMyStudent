<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
      'name'=> 'admin',
      'email'=> 'admin@gmail.com',
      'password'=> bcrypt('admin'),
      'statut'=> 'admin',

    ]);
      DB::table('users')->insert([
      'name'=> 'eleve',
      'email'=> 'eleve@gmail.com',
      'password'=> bcrypt('eleve'),
      'statut'=> 'eleve',

    ]);
    }
}
