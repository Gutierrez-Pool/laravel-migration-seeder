<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $newTrain = new Train();

        // $newTrain->compagnia = "Trenitalia";
        // $newTrain->stazione_partenza = "Milano";
        // $newTrain->stazione_arrivo = "Roma";
        // $newTrain->partenza = "2011-05-13 15:00";
        // $newTrain->arrivo = "2014-06-14 11:00";
        // $newTrain->codice = "1305P";
        // $newTrain->carrozze = "5";
        // $newTrain->is_on_time = true;
        // $newTrain->is_cancelled = false;

        // $newTrain->save();


        for ($i = 0; $i < 100; $i++) {

            $newTrain = new Train();

            $newTrain->compagnia = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrivo = $faker->dateTimeBetween('+2 week', '+3 week');
            $newTrain->codice = $faker->unique()->randomNumber(6, true);
            $newTrain->carrozze = $faker->randomNumber(1, 5);
            $newTrain->is_on_time = $faker->boolean();
            $newTrain->is_cancelled = $faker->boolean();

            $newTrain->save();

        }
    }
}