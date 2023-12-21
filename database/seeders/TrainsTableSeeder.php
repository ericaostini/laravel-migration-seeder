<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_code = $faker->numerify('TR-####');
            $train->carriages = $faker->rnumberBetween(3, 10);
            $train->in_time = $faker->boolean([true, false]);
            $train->cancelled = $faker->boolean([true, false]);
            $train->date = $faker->date();
            $train->type = $faker->randomElement(['Regional Trains', 'Cargo Trains', 'High-Speed Trains', 'Local Trains']);
            $train->save();
        }
    }
}