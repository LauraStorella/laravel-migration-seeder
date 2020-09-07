<?php

use Illuminate\Database\Seeder;
use App\Car;
use Faker\Generator as Faker;

class CarsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 5; $i++){
            $new_car = new Car();
            $new_car->marca = $faker->randomElement(['Fiat', 'Ford', 'Tesla', 'BMW', 'Audi']);
            $new_car->modello = $faker->randomElement(['Punto', 'Fiesta', 'Tesla', 'A3', 'X5']);
            $new_car->targa = $faker->randomNumber();
            $new_car->anno = $faker->numberBetween(1990, 2020);
            $new_car->save();
        }
    }
}
