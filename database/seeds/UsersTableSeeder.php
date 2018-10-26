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
        [
            'name' => 'admin',
            'email' => 'jaypaulaying5@gmail.com',
            'username' => 'admin',
            'is_tabulator' => true,
            'is_judge' => false,
            'password' => bcrypt('admin12345'),
        ],
        [
            'name'         => 'Harry Potter',
            'username'     => 'judge1',
            'email'        => 'harrypotter'.'@gmail.com',
            'is_tabulator' => false,
            'is_judge'     => true,
            'password'     => bcrypt('judge1')
        ],
        [
            'name'         => 'Ron Weasley',
            'username'     => 'judge2',
            'email'        => 'ronweasley'.'@gmail.com',
            'is_tabulator' => false,
            'is_judge'     => true,
            'password'     => bcrypt('judge2')
        ],
        [ 
            'name'         => 'Hermione Granger',
            'username'     => 'judge3',
            'email'        => 'hermionegraner'.'@gmail.com',
            'is_tabulator' => false,
            'is_judge'     => true,
            'password'     => bcrypt('judge3')
        ]
      ]);
    }
}
