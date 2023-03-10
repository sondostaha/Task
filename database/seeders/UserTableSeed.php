<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'sondostaha',
            'email'=>'sondos123@yahoo.com',
            'password'=>bcrypt('0000000')
        ]);
        User::create([
            'name'=>'walaa',
            'email'=>'walaa123@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'taha',
            'email'=>'taha234@yahoo.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'esraa',
            'email'=>'esraa87@yahoo.com',
            'password'=>bcrypt('0000000')
        ]);
        User::create([
            'name'=>'ahmed',
            'email'=>'ahmed99@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'samy',
            'email'=>'samy29@yahoo.com',
            'password'=>bcrypt('12345678')
        ]);
    }
}
