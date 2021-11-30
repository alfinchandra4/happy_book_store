<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create('id_ID');
        $arr = [1,2,3];

        for ($i = 0; $i < 100 ; $i++) {
            DB::table('details')->insert([
                'book_id' => $i+1,
                'author' => $this->faker->name,
                'publisher' => $this->faker->company,
                'year' => $this->faker->year($max = 'now') ,
                'description' => $this->faker->text,
            ]);
        }
    }
}
