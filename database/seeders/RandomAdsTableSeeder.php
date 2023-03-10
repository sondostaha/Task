<?php

namespace Database\Seeders;

use App\Models\RandomAds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RandomAdsTableSeeder extends Seeder
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

            RandomAds::create([
                'title'=>$fake->realText(150),
                'link'=>$fake->url(),
                'img'=>$fake->imageUrl( 360, 360, 'Market', true),
            ]);

    }
}
}