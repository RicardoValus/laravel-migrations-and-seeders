<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contacts')->insert([
            'name' => 'Ricardo Valus',
            'email' => 'ricardo@email.com',
            'telefone' => '(00) 9999-9999',
            'data_nascimento' => '1990-05-15'
        ]);

        DB::table('contacts')->insert([
            'name' => 'Hiego Souza',
            'email' => 'hiego@email.com',
            'telefone' => '(00) 8888-8888',
            'data_nascimento' => '2005-05-18'
        ]);
    }
}
