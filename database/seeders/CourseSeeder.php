<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->truncate();

        for($index = 1; $index <= 20; $index++) {
            DB::table('courses')->insert([
                "title" => "Video Tutorial $index",
                "video" => "https://www.youtube.com/embed/A0tKGpKOU4Y?si=pRmwifb9jg_umQrf",
            ]);
        }
    }
}
