<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Red', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Blue', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Yellow', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Green', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        Tag::insert($data);
    }
}
