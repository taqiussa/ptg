<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
            [
                [
                    'name' => 'Taqius Shofi Albastomi,S.Kom',
                    'username' => 'taqi',
                ],
                [
                    'name' => 'Fathurrohman,S.Pd.I',
                    'username' => 'fathur',
                ],
                [
                    'name' => 'Imam Turmudzi,S.E.',
                    'username' => 'imam',
                ],
                [
                    'name' => 'Muh Syifa Aiza Aista,S.Pd.I',
                    'username' => 'iza',
                ],
                [
                    'name' => 'Nur Khoironi AH,S.Ag',
                    'username' => 'roni',
                ],
                [
                    'name' => 'Muhlisin,S.Pd',
                    'username' => 'lisin',
                ],
                [
                    'name' => 'Isyfaq Hidayat',
                    'username' => 'isyfaq',
                ],
                [
                    'name' => 'Ristiono,S.Pd',
                    'username' => 'sir',
                ],

            ];
        foreach ($data as $user) {
            User::create([
                'name' => $user['name'],
                'username' => $user['username'],
                'password' => bcrypt('smpalfaguru')
            ]);
        }

        $mata_pelajaran = [
            'Pendidikan Agama Islam',
            'Pendidikan Kewarganegaraan',
            'Bahasa Indonesia',
            'Matematika',
            'Ilmu Pengetahuan Alam',
            'Ilmu Pengetahuan Sosial',
            'Bahasa Inggris',
            'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'Informatika',
            'Prakarya',
            "Al Qur'an",
            'Fiqih',
            'Akhlak',
            'Ilmu Tajwid',
            'Tarikh',
            'Akidah',
            'Bahasa Jawa',
            'Konseling',
            'Staff TU',
            'Satpam',
            'Bendahara',
            'Karyawan'
        ];

        foreach ($mata_pelajaran as $mapel) {
            MataPelajaran::create(
                [
                    'nama' => $mapel
                ]
            );
        }
    }
}
