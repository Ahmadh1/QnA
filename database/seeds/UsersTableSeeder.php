<?php

use App\User;
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
        User::create([
        	'name' => 'Ahmad H.',
        		'email' => 'ahmadh@mail.com',
        			'password' => bcrypt('secret')
        ]);

        User::create([
        	'name' => 'Maaz M.',
        		'email' => 'imaaz18@gmail.com',
        			'password' => bcrypt('secret')
        ]);

        User::create([
        	'name' => 'Emily',
        		'email' => 'emily@mail.com',
        			'password' => bcrypt('secret')
        ]);
    }
}
