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
  public function run(Faker $faker): void {
    for($i = 0; $i < 10; $i++) {
      $train = new Train();

      $train->company = $faker->randomElement(['SNCF', 'Deutsche Bahn' , 'Renfe Operadora', 'Trenitalia', 'ÖBB', 'Swiss Federal Railways', 'Eurostar', 'NS', 'České dráhy', 'PKP Intercity']);
      $train->departure_station = $faker->city();
      $train->arrival_station = $faker->city();
      $train->departure_time = $faker->time();
      $train->arrival_time = $faker->time();
      $train->train_code = $faker->numerify('train-######');
      $train->wagons_number = $faker->numberBetween(1, 9);
      $train->on_time = $faker->boolean();
      $train->deleted = $faker->boolean();
      $train->departure_date = $faker->dateTime();

      $train->save();
    }
  }
}
