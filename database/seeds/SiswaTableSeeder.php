<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'DELLA RAHMA DANI',
            'gender' => 'P',
            'nilai_ipa' => 'B',
            'nilai_ips' => 'B',
            'usbn_ipa' => 'Baik',
            'usbn_ips' => 'Sangat Baik',
            'rekomendasi' => 'IPS',
            'minat' => 'IPS',
            'status_kelas' => 'IPS',
        ]);
    }
}
