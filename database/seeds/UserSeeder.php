<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Luis López Hernández',
            'email' => 'llopez@hotmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => DB::table('professions')->whereTitle('FrontEnd-Developer')->value('id'),
        ]);
    }
}
