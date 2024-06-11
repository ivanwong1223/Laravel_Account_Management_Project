<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            ['name'=>'User',
            'email'=>'user@example.com',
            'password'=>bcrypt('123456'),
            'role'=>0]
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
