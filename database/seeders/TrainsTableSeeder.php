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
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->numerify('TR-####');
            $newTrain->carriages = $faker->numberBetween(3, 10);
            $newTrain->on_time = $faker->boolean([true, false]);
            $newTrain->cancelled = $faker->boolean([true, false]);
            $newTrain->date = $faker->date();
            $newTrain->type = $faker->randomElement(['Regional Trains', 'Cargo Trains', 'High-Speed Trains', 'Local Trains']);

            $newTrain->save();
        }
    }
}