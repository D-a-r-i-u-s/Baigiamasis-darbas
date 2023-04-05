<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                "title" => "Veiksmo",
            ],
            [
                "title" => "Siaubo",
            ],
            [
                "title" => "Mokslinė fantastika",
            ],
        ]);
    }
}
