<?php

use Illuminate\Database\Seeder;

class EndpointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = include env('DATA_SEED');

        \Illuminate\Support\Facades\DB::table('endpoints')->insert((array)$data);
    }
}
