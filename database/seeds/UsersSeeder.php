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
        // Test Data for Development
        DB::table('users')->insert([
            [

                // admin account
                // username: admin
                // password: admin123

                'name'         => str_random(10),
                'username'     => 'admin',
                'email'        => str_random(10).'@gmail.com',
                'is_tabulator' => '1',
                'is_judge'     => '0',
                'password'     => bcrypt('admin123')
            ],
            [

                // judge1 account
                // username: judge1
                // password: judge1

                'name'         => str_random(10),
                'username'     => 'judge1',
                'email'        => str_random(10).'@gmail.com',
                'is_tabulator' => '0',
                'is_judge'     => '1',
                'password'     => bcrypt('judge1')
            ],
            [

                // judge2 account
                // username: judge2
                // password: judge2

                'name'         => str_random(10),
                'username'     => 'judge2',
                'email'        => str_random(10).'@gmail.com',
                'is_tabulator' => '0',
                'is_judge'     => '1',
                'password'     => bcrypt('judge2')
            ],
            [

                // judge3 account
                // username: judge3
                // password: judge3
                
                'name'         => str_random(10),
                'username'     => 'judge3',
                'email'        => str_random(10).'@gmail.com',
                'is_tabulator' => '0',
                'is_judge'     => '1',
                'password'     => bcrypt('judge3')
            ]
        ]);
    }
}
