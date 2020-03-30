<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            FunctiesTableSeeder::class
        ]); moet je ook naar git pusten? log in op je git
    via github? ja
    }
}
