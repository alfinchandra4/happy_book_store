<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        $arr = [1,2,3];

        for ($i = 0; $i < 100 ; $i++) {
            DB::table('books')->insert([
                "category_id" => $arr[array_rand($arr, 1)],
                "title" => $this->faker->bs,
            ]);
        }
    }
}

