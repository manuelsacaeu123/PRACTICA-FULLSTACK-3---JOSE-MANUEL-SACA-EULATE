<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table("clientes")->insert([
            ["ci"=>"1010","nombre"=>"MANUEL SACA"],
            ["ci"=>"2020","nombre"=>"VENUS POZO"],
        ]);
    }
}
