<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Author =  [
            [
              'name' => 'Jim kwik',

            ],
            [
              'name' => 'David',

            ],
            [
              'name' => 'Ali',

            ],

          ];

          Author::insert($Author);
    }
}
