<?php

namespace Database\Seeders;


use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 15; $i++) {

            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Italo']);
            $train->startStation = $faker->city();
            $train->endStation = $faker->city();
            $train->departureTime = $faker->time();
            $train->arrivalTime = $faker->time(); //add check: arrival Time > DatTime
            $train->numberOfCoaches = $faker->numberBetween(5, 9);
            $train->onTime = $faker->boolean(80);
            $train->cancelled = $faker->boolean(10);
            $train->save();
        }
    }
}
