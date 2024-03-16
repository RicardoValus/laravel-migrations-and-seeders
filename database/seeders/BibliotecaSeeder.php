<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('biblioteca')->insert([
            'Title' => 'O Circo Mecânico Tresaulti',             
            'AuthorPublisher' => "Genevieve Valentine",
            'PublicationDate' => "2016-05-16",
            'GenreType' => "fantasia",
            'AvailableCopies' => "000",]);
    }
}
