<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(userSeeder::class);
    }
}

class userSeeder extends Seeder
{
    public function run()
    {   
        DB::table('users')->insert([
            [
                'name' => 'admin2',
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => 'admin3',
                'email' => 'admin3@gmail.com',
                'password' => bcrypt('matkhau')
            ],
            [
                'name' => 'admin4',
                'email' => 'admin4@gmail.com',
                'password' => bcrypt('matkhau')
            ]
        
        ]);
    }
}
