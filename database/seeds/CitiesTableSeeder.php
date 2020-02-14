<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //I/2
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Rabat'

        ]);
        DB::table('cities')->insert([
            'name' => 'Casa'

        ]);
        DB::table('cities')->insert([
            'name' => 'Tangier'

        ]);
    }
}
