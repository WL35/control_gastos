<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('users')->insert([
        'usu_usuario'=>'Admin',
        'password'=>bcrypt('123456789'),
        'usu_estado'=>'1',
        'usu_cedula'=>'123456789',
        'usu_apellido'=>'perez',
        'usu_nombre'=>'juan',
        'usu_correo'=>'admin@vn.com',
        'usu_rol'=>'1',
        'usu_tipo'=>'1',
        'created_at'=>date('Y-m-d H:i'),

    ]);
    }
}
