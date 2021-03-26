<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Food'],
            ['title' => 'Drinks'],
            ['title' => 'Accesories'],
            ['title' => 'Electronics'],
        ];

        Category::insert($data);
    }
}
