<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = ['Mozzarella',  'Pomodoro',  'Funghi',  'Prosciutto',  'Peperoni',  'Olive nere',  'Cipolla',  'Salsiccia',  'Pomodori secchi',  'Spinaci',  'Peperoncino',  'Ananas',  'Gorgonzola',  'Carciofi',  'Pancetta',  'Rucola',  'Grana Padano',  'Pesto',  'Basilico fresco',  'Aglio'];

        foreach ($ingredients as $elem) {
            $new_ingredient = new Ingredient();
            $new_ingredient->name = $elem;
            $new_ingredient->slug = Str::slug($new_ingredient->name);
            $new_ingredient->save();
        }
    }
}
