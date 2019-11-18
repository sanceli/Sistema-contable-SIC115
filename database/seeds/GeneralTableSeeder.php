<?php

use Illuminate\Database\Seeder;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('datos_generales')->insert([
            'argumento' => 'UTILIDAD NETA',
            'cantidad' => '0',
        ]);
    }
}
