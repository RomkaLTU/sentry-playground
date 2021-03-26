<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 100; $i++) {
            DB::table('product_tag')->insert(
                [
                    'product_id' => Product::inRandomOrder()->first()->id,
                    'tag_id' => Tag::inRandomOrder()->first()->id,
                ]
            );
        }
    }
}
