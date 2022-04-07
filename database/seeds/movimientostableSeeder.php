<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class movimientostableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movimientostable')->insert([
            'mov_detalle'=>'sueldo mama',
            'mov_valor'=>'450',
            'mov_fecha'=>'2022-04-06',
            'cat_id'=>'1',
            'usu_id'=>'1',
        ]);
    }
}
