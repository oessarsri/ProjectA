<?php

use Illuminate\Database\Seeder;

class DeliveryTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //II2
    public function run()
    {
        DB::table('delivery-times')->insert([

            'delivery_at'=>'9->12'
        ]);
        DB::table('delivery-times')->insert([

            'delivery_at'=>'14->18'
        ]);
        DB::table('delivery-times')->insert([

            'delivery_at'=>'10->13'
        ]);
        DB::table('delivery-times')->insert([

            'delivery_at'=>'15->19'
        ]);
        DB::table('delivery-times')->insert([

            'delivery_at'=>'9->13'
        ]);

        DB::table('delivery-times')->insert([

            'delivery_at'=>'18->20'
        ]);
    }
}
