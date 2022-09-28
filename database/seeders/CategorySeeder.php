<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Information system',
            ],
            [
                'name' => 'Blog',
            ],
            [
                'name' => 'Health',
            ]
            ];
            Category::insert($category);
    }
}
