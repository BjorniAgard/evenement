<?php

use Illuminate\Database\Seeder;

class FunctiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('functies')->insert([
            'title' => 'barkeeper',
        ]);
        DB::table('functies')->insert([
            'title' => 'receptie',
        ]);
        DB::table('functies')->insert([
            'title' => 'ober',
        ]);
        DB::table('functies')->insert([
            'title' => 'gastheer/vrouw'
        ]);
    }
}
