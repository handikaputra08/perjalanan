<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_pegawai')->insert([
            'nama' => 'Handika Dika',
            'gol' => 'Pembina (IV/a)',
            'nip' => '19940830 202405 1 001',
            'jabatan' => 'Pranata Komputer Ahli Pertama',
            'rekening' => '010 02 15 11797 3',

        ]);

        DB::table('data_pegawai')->insert([
            'nama' => 'Handika',
            'gol' => 'Pembina (IV/a)',
            'nip' => '19940830 202405 1 001',
            'jabatan' => 'Pranata Komputer Ahli Pertama',
            'rekening' => '010 02 15 11797 3',

        ]);

        DB::table('data_pegawai')->insert([
            'nama' => 'Dika',
            'gol' => 'Pembina (IV/a)',
            'nip' => '19940830 202405 1 001',
            'jabatan' => 'Pranata Komputer Ahli Pertama',
            'rekening' => '010 02 15 11797 3',

        ]);
    }
}
