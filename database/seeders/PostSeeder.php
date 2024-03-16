<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('post')->insert([
            'PostTitle' => 'Frankenstein',             
            'Author' => "Mary Shelley",
            'PublicationDate' => "1818-01-01",
            'Content' => "Horror",
            'Tags' => "Clássico da literatura",]);
    }
}
