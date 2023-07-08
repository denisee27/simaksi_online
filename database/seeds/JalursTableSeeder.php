<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JalursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jalurs')->delete();        

        \App\Jalur::create([
            'nama_jalur' => 'Jalur Utama',
            'harga' => 10000,
            'gunungs_id' => 1
        ]);

        \App\Jalur::create([
            'nama_jalur' => 'Jalur Belakang',
            'harga' => 20000,
            'gunungs_id' => 1
        ]);

        \App\Jalur::create([
            'nama_jalur' => 'Jalur Sala',
            'harga' => 10000,
            'gunungs_id' => 1
        ]);

        \App\Jalur::create([
            'nama_jalur' => 'Jalur Utama',
            'harga' => 12500,
            'gunungs_id' => 2
        ]);

        \App\Jalur::create([
            'nama_jalur' => 'Jalur Pendakian Jurang',
            'harga' => 15000,
            'gunungs_id' => 2
        ]);

        \App\Jalur::create([
            'nama_jalur' => 'Jalur Utama',
            'harga' => 10000,
            'gunungs_id' => 3
        ]);

        \App\Jalur::create([
            'nama_jalur' => 'Jalur Samping',
            'harga' => 10000,
            'gunungs_id' => 1
        ]);
    }
}
