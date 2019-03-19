<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professions')->insert([
           'title' => 'BackEnd-Developer'
        ]);

        DB::table('professions')->insert([
            'title' => 'FrontEnd-Developer'
        ]);

        DB::table('professions')->insert([
            'title' => 'Analizador-Developer'
        ]);

        DB::table('professions')->insert([
            'title' => 'Pro-Developer'
        ]);
    }
}
