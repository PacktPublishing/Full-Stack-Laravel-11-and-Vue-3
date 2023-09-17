<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'If Tomorrow Comes',
            'author' => 'Sidney Sheldon'
        ]);

        DB::table('books')->insert([
            'title' => 'The Outsider',
            'author' => 'Stephen King'
        ]);

        DB::table('books')->insert([
            'title' => 'Hunt for The Red October',
            'author' => 'Tom Clancy'
        ]);

        DB::table('books')->insert([
            'title' => 'The Silkworm',
            'author' => 'Robert Galbraith'
        ]);
    }
}
