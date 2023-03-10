<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = \Faker\Factory::create();
        for($i=1;$i<=20 ;$i++){

            Posts::create([
                'user_id'=>User::inRandomOrder()->first()->id,
                'body'=>$fake->paragraph(),
                'img'=>$fake->imageUrl(),
            ]);

        }
    }
}
