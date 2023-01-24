<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodMappingIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_mapping_ingredients') -> insert([
            [
                'foodId' => 1,
                'ingredientsId' => 1,
                'amount' => 3
            ],
            [
                'foodId' => 1,
                'ingredientsId' => 4,
                'amount' => 1
            ],
            [
                'foodId' => 1,
                'ingredientsId' => 6,
                'amount' => 2
            ],
            [
                'foodId' => 1,
                'ingredientsId' => 7,
                'amount' => 6
            ],
            [
                'foodId' => 2,
                'ingredientsId' => 2,
                'amount' => 2
            ],
            [
                'foodId' => 2,
                'ingredientsId' => 1,
                'amount' => 1
            ],
            [
                'foodId' => 2,
                'ingredientsId' => 5,
                'amount' => 3
            ],
            [
                'foodId' => 2,
                'ingredientsId' => 3,
                'amount' => 5
            ],
            [
                'foodId' => 2,
                'ingredientsId' => 7,
                'amount' => 4
            ],
            [
                'foodId' => 2,
                'ingredientsId' => 3,
                'amount' => 8
            ],
            [
                'foodId' => 2,
                'ingredientsId' => 3,
                'amount' => 8
            ],
            [
                'foodId' => 3,
                'ingredientsId' => 4,
                'amount' => 2
            ],
            [
                'foodId' => 3,
                'ingredientsId' => 6,
                'amount' => 1
            ],
            [
                'foodId' => 3,
                'ingredientsId' => 1,
                'amount' => 3
            ],
            [
                'foodId' => 3,
                'ingredientsId' => 3,
                'amount' => 5
            ],
            [
                'foodId' => 3,
                'ingredientsId' => 1,
                'amount' => 4
            ],
            [
                'foodId' => 3,
                'ingredientsId' => 2,
                'amount' => 8
            ],
            [
                'foodId' => 4,
                'ingredientsId' => 1,
                'amount' => 2
            ],
            [
                'foodId' => 4,
                'ingredientsId' => 7,
                'amount' => 3
            ],
            [
                'foodId' => 4,
                'ingredientsId' => 2,
                'amount' => 1
            ],
            [
                'foodId' => 4,
                'ingredientsId' => 3,
                'amount' => 3
            ],
            [
                'foodId' => 4,
                'ingredientsId' => 7,
                'amount' => 5
            ],
            [
                'foodId' => 4,
                'ingredientsId' => 4,
                'amount' => 4
            ],
            [
                'foodId' => 4,
                'ingredientsId' => 5,
                'amount' => 8
            ],
            [
                'foodId' => 4,
                'ingredientsId' => 8,
                'amount' => 8
            ],
            [
                'foodId' => 5,
                'ingredientsId' => 2,
                'amount' => 2
            ],
            [
                'foodId' => 5,
                'ingredientsId' => 1,
                'amount' => 1
            ],
            [
                'foodId' => 5,
                'ingredientsId' => 10,
                'amount' => 3
            ],
            [
                'foodId' => 5,
                'ingredientsId' => 12,
                'amount' => 5
            ],
            [
                'foodId' => 5,
                'ingredientsId' => 11,
                'amount' => 4
            ],
            [
                'foodId' => 5,
                'ingredientsId' => 1,
                'amount' => 8
            ],
            [
                'foodId' => 6,
                'ingredientsId' => 15,
                'amount' => 8
            ],
            [
                'foodId' => 6,
                'ingredientsId' => 12,
                'amount' => 2
            ],
            [
                'foodId' => 6,
                'ingredientsId' => 15,
                'amount' => 1
            ],
            [
                'foodId' => 6,
                'ingredientsId' => 3,
                'amount' => 3
            ],
            [
                'foodId' => 6,
                'ingredientsId' => 4,
                'amount' => 5
            ],
            [
                'foodId' => 6,
                'ingredientsId' => 7,
                'amount' => 4
            ],
            [
                'foodId' => 7,
                'ingredientsId' => 1,
                'amount' => 1
            ],
            [
                'foodId' => 7,
                'ingredientsId' => 6,
                'amount' => 2
            ],
            [
                'foodId' => 7,
                'ingredientsId' => 15,
                'amount' => 6
            ],
            [
                'foodId' => 7,
                'ingredientsId' => 8,
                'amount' => 1
            ],
            [
                'foodId' => 7,
                'ingredientsId' => 2,
                'amount' => 3
            ],
            [
                'foodId' => 7,
                'ingredientsId' => 5,
                'amount' => 5
            ],
            [
                'foodId' => 7,
                'ingredientsId' => 6,
                'amount' => 4
            ],
            [
                'foodId' => 8,
                'ingredientsId' => 2,
                'amount' => 3
            ],
            [
                'foodId' => 8,
                'ingredientsId' => 10,
                'amount' => 1
            ],
            [
                'foodId' => 8,
                'ingredientsId' => 9,
                'amount' => 9
            ],
            [
                'foodId' => 8,
                'ingredientsId' => 2,
                'amount' => 1
            ],
            [
                'foodId' => 8,
                'ingredientsId' => 6,
                'amount' => 3
            ],
            [
                'foodId' => 8,
                'ingredientsId' => 6,
                'amount' => 5
            ],
            [
                'foodId' => 8,
                'ingredientsId' => 4,
                'amount' => 4
            ],
            [
                'foodId' => 9,
                'ingredientsId' => 1,
                'amount' => 8
            ],
            [
                'foodId' => 9,
                'ingredientsId' => 9,
                'amount' => 8
            ],
            [
                'foodId' => 9,
                'ingredientsId' => 16,
                'amount' => 2
            ],
            [
                'foodId' => 9,
                'ingredientsId' => 13,
                'amount' => 1
            ],
            [
                'foodId' => 9,
                'ingredientsId' => 12,
                'amount' => 3
            ],
            [
                'foodId' => 10,
                'ingredientsId' => 2,
                'amount' => 5
            ],
            [
                'foodId' => 10,
                'ingredientsId' => 1,
                'amount' => 4
            ],
            [
                'foodId' => 10,
                'ingredientsId' => 10,
                'amount' => 8
            ],
            [
                'foodId' => 10,
                'ingredientsId' => 15,
                'amount' => 8
            ],
            [
                'foodId' => 10,
                'ingredientsId' => 18,
                'amount' => 2
            ],
            [
                'foodId' => 10,
                'ingredientsId' => 12,
                'amount' => 1
            ],
            [
                'foodId' => 11,
                'ingredientsId' => 5,
                'amount' => 3
            ],
            [
                'foodId' => 11,
                'ingredientsId' => 9,
                'amount' => 5
            ],
            [
                'foodId' => 11,
                'ingredientsId' => 7,
                'amount' => 4
            ],
            [
                'foodId' => 11,
                'ingredientsId' => 3,
                'amount' => 8
            ],
            [
                'foodId' => 11,
                'ingredientsId' => 2,
                'amount' => 8
            ],
        ]);
    }
}
