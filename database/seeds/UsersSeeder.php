<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // judges - test data for development
        DB::table('users')->insert([
            [

                // judge1 account
                // username: judge1
                // password: judge1

                'name'         => 'Harry Potter',
                'username'     => 'judge1',
                'email'        => 'harrypotter'.'@gmail.com',
                'is_tabulator' => false,
                'is_judge'     => true,
                'password'     => bcrypt('judge1')
            ],
            [

                // judge2 account
                // username: judge2
                // password: judge2

                'name'         => 'Ron Weasley',
                'username'     => 'judge2',
                'email'        => 'ronweasley'.'@gmail.com',
                'is_tabulator' => false,
                'is_judge'     => true,
                'password'     => bcrypt('judge2')
            ],
            [

                // judge3 account
                // username: judge3
                // password: judge3
                
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
