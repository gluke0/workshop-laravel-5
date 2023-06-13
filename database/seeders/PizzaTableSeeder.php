<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;
use Faker\Generator as Faker;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {
        for($i = 0; $i < 15; $i++){
            $newPizza = new Pizza();
            $newPizza -> name = $faker->unique()-> randomElement(['Margherita', 'Quattro Formaggi', 'Diavola', 'Capricciosa', 'Marinara', 'Prosciutto e Funghi', 'Napoletana', 'Calzone', 'Vegetariana','Frutti di Mare', 'Bufala', 'Tonno e Cipolla', 'Romana', 'Pesto e Pomodori Secchi', 'Patatine Fritte e Salsiccia']);
            $newPizza -> description = $faker->paragraph();
            $newPizza -> price = $faker->randomFloat(2, 5, 20);
            $newPizza -> calories = $faker->numberBetween(100, 1000);
            $newPizza -> vegan = $faker->boolean();
            $newPizza -> available = $faker->boolean();
            $newPizza ->save();
        }
    }
}