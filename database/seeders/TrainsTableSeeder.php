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
     */
    public function run(Faker $faker): void
    {

        for ($i = 0; $i < 12; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-2 days', 'now')->format('Y-m-d H:i:s');
            $newTrain->arrival_time = $faker->dateTimeBetween('now', '2 days')->format('Y-m-d H:i:s');
            $newTrain->train_code = $this->generateTrainCode();
            $newTrain->total_carriages = $faker->numberBetween(4, 12);

            $on_time = $faker->numberBetween(0, 1);

            $newTrain->is_on_time = $on_time;
            $newTrain->is_canceled = !boolval($on_time);

            $newTrain->save();
        }
    }

    private function generateTrainCode(): string
    {
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $train_code = $letters[rand(0, strlen($letters))] . $letters[rand(0, strlen($letters))] . rand(1000, 9999);

        return $train_code;
    }
}