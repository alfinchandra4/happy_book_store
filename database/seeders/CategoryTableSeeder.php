<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = [
            [
                'category' => 'Fiction',
            ],[
                'category' => 'Science',
            ],[
                'category' => 'Computer',
            ],
        ];

        DB::table('categories')->insert($category);
    }
}
