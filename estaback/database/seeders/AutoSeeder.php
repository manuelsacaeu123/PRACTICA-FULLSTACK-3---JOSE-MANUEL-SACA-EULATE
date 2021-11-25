<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("autos")->insert([
            ["placa"=>"BBB-1515","marca"=>"NISSAN","cliente_id"=>1],
            ["placa"=>"AAA-2000","marca"=>"TOYOTA","cliente_id"=>2],
        ]);
    }
}
