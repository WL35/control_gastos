<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CategoryTable')->insert([
            'cat_nombre'=>'Servicios Basicos',
            'cat_tipo'=>'1',
        ]);
    }
}
