<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'admin',
          'email' => 'jaypaulaying5@gmail.com',
          'username' => 'admin',
          'is_tabulator' => true,
          'is_judge' => false,
          'password' => bcrypt('admin12345'),
      ]);
    }
}
