<?php

use App\Apartment;
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
        $faker = Faker\Factory::create();

        for($i  = 0; $i < 20; $i++) {
            Apartment::create([
                'name' => $faker->sentence,
                'address' => $faker->sentence(4),
                'price' => '1000000000',
                'image' => 'https://i.ytimg.com/vi/tJV7_Ieer6w/maxresdefault.jpg',
                'infomation' => $faker->sentence(4),
                'details' => $faker->sentence(4),
            ]);
        }
    }
}
