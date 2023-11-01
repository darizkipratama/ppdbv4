<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Programme;
use Carbon\Carbon;


class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Programme::create([
            'name'=> 'TK A Online',
            'kode'=> 'PF-TKA',
            'kuota_ikhwan'=> 10,
            'kuota_akhwat' => 10,
            'pendaftar_ikhwan' => 0,
            'pendaftar_akhwat' => 0,
            'open_registration' => Carbon::create('2023', '11', '01'),
            'closing_registration' => Carbon::create('2024', '01', '31'),
        ]);

        Programme::create([
            'name'=> 'TK B Online',
            'kode'=> 'PF-TKB',
            'kuota_ikhwan'=> 10,
            'kuota_akhwat' => 10,
            'pendaftar_ikhwan' => 0,
            'pendaftar_akhwat' => 0,
            'open_registration' => Carbon::create('2023', '11', '01'),
            'closing_registration' => Carbon::create('2024', '01', '31'),
        ]);
    }
}
