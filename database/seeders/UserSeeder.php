<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'yyy',
            'role' => 'administrator',
            'email' => 'yyy@gmail.com',
            'password' => bcrypt('yyy@gmail.com'),
        ]);
    }
}
