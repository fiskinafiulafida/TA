<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SeederStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_status')->insert([
            ['deskripsi' => 'Dipinjamkan'],
            ['deskripsi' => 'Dikembalikan'],  
        ]);
    }
}
