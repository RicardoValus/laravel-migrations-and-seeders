<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('aluno')->insert([
        'name' => 'Ricardo Medlo Valus',             
        'DateOfBirth' => "2004-06-03",
        'email' => "ricardovalus@gmail.com",
        'RegistrationNumber' => "3",
        'ClassCourse' => "TADS",]);
    }
}
