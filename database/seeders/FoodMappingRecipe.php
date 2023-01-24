<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodMappingRecipe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_mapping_recipe') -> insert([
            [
                'foodId' => 1,
                'recipeId' => 1,
            ],
            [
                'foodId' => 1,
                'recipeId' => 2,
            ],
            [
                'foodId' => 1,
                'recipeId' => 3,
            ],
            [
                'foodId' => 1,
                'recipeId' => 4,
            ],
            [
                'foodId' => 1,
                'recipeId' => 5,
            ],
            [
                'foodId' => 2,
                'recipeId' => 6,
            ],
            [
                'foodId' => 2,
                'recipeId' => 7,
            ],
            [
                'foodId' => 2,
                'recipeId' => 8,
            ],
            [
                'foodId' => 3,
                'recipeId' => 9,
            ],
            [
                'foodId' => 3,
                'recipeId' => 10,
            ],
            [
                'foodId' => 4,
                'recipeId' => 11,
            ],
            [
                'foodId' => 4,
                'recipeId' => 12,
            ],
            [
                'foodId' => 4,
                'recipeId' => 13,
            ],
            [
                'foodId' => 5,
                'recipeId' => 14,
            ],
            [
                'foodId' => 5,
                'recipeId' => 15,
            ],
            [
                'foodId' => 5,
                'recipeId' => 16,
            ],
            [
                'foodId' => 5,
                'recipeId' => 24,
            ],
            [
                'foodId' => 6,
                'recipeId' => 5,
            ],

            [
                'foodId' => 6,
                'recipeId' => 9,
            ],
            [
                'foodId' => 6,
                'recipeId' => 15,
            ],
            [
                'foodId' => 6,
                'recipeId' => 24,
            ],
            [
                'foodId' => 6,
                'recipeId' => 9,
            ],
            [
                'foodId' => 6,
                'recipeId' => 15,
            ],
            [
                'foodId' => 6,
                'recipeId' => 24,
            ],
            [
                'foodId' => 7,
                'recipeId' => 1,
            ],
            [
                'foodId' => 7,
                'recipeId' => 2,
            ],
            [
                'foodId' => 7,
                'recipeId' => 3,
            ],
            [
                'foodId' => 7,
                'recipeId' => 24,
            ],
            [
                'foodId' => 8,
                'recipeId' => 3,
            ],
            [
                'foodId' => 8,
                'recipeId' => 8,
            ],
            [
                'foodId' => 8,
                'recipeId' => 9,
            ],
            [
                'foodId' => 8,
                'recipeId' => 10,
            ],
            [
                'foodId' => 8,
                'recipeId' => 24,
            ],
            [
                'foodId' => 9,
                'recipeId' => 2,
            ],
            [
                'foodId' => 9,
                'recipeId' => 7,
            ],
            [
                'foodId' => 9,
                'recipeId' => 20,
            ],
            [
                'foodId' => 9,
                'recipeId' => 24,
            ],
            [
                'foodId' => 9,
                'recipeId' => 5,
            ],
            [
                'foodId' => 10,
                'recipeId' => 16,
            ],
            [
                'foodId' => 10,
                'recipeId' => 13,
            ],
            [
                'foodId' => 10,
                'recipeId' => 8,
            ],
            [
                'foodId' => 10,
                'recipeId' => 24,
            ],
        ]);
    }
}
