<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();

        $newTrain->compagnia = "Trenitalia";
        $newTrain->stazione_partenza = "Milano";
        $newTrain->stazione_arrivo = "Roma";
        $newTrain->partenza = "2011-05-13 15:00";
        $newTrain->arrivo = "2014-06-14 11:00";
        $newTrain->codice = "1305P";
        $newTrain->carrozze = "5";
        $newTrain->is_on_time = true;
        $newTrain->is_cancelled = false;

        $newTrain->save();
    }
}
