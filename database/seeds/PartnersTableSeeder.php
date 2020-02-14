<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //I/2
    public function run()
    {
        DB::table('partners')->insert([
            'name' => 'Mohamed',
            'id_city'=>1

        ]);
        DB::table('partners')->insert([
            'name' => 'Hassan',
            'id_city'=>2
        ]);
        DB::table('partners')->insert([
            'name' => 'Nada',
            'id_city'=>3
        ]);
    }
}
