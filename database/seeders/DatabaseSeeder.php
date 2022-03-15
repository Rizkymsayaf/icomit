<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        User::create([
            'name' => 'Rizky',
            'username' => 'rizky',
            'email' => 'Rizky@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => '1'
        ]);
        User::create([
            'name' => 'mamat',
            'username'=> 'mamat',
            'email' => 'mamat@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => '0'
        ]);


    }
}
