<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Juan',
            'last_name' => 'Feltrin',
            'email' => 'juan@teste.com',
            'password' => Hash::make('123456'),
            'code_phone' => 48,
            'phone' => '996869381',
            'cpf' => '09288293914'
        ]);
    }
}
