<?php

namespace Database\Seeders;

use App\Models\JenisPenilaian;
use App\Models\KategoriNilai;
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
                    'name' => 'Fathurrohman,S.Pd',
                    'username' => 'fathur',
                ],
                [
                    'name' => 'Imam Turmudzi,S.E.',
                    'username' => 'imam',
                ],
                [
                    'name' => 'Muh Syifa Aiza Aista,S.Pd',
                    'username' => 'iza',
                ],
                [
                    'name' => 'Nurkhaeroni Alamul Huda,S.Ag',
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
                [
                    'name' => 'Rizka Elistanti,S.Pd',
                    'username' => 'elis',
                ],
                [
                    'name' => 'Moh Arif Rahman,S.Pd',
                    'username' => 'arif',
                ],
                [
                    'name' => 'Laili Mawadah,S.Pd.Gr.',
                    'username' => 'laili',
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

        $listKategori =
            [
                [
                    'nama' => 'Agama'
                ],
                [
                    'nama' => 'Micro Teaching'
                ],
                [
                    'nama' => 'Wawancara'
                ],
            ];

        $listJenisAgama =
            [
                [
                    'kategori_nilai_id' => 1,
                    'nama' => 'tajwid',
                ],
                [
                    'kategori_nilai_id' => 1,
                    'nama' => 'kelancaran',
                ],
                [
                    'kategori_nilai_id' => 1,
                    'nama' => 'iftitah',
                ],
                [
                    'kategori_nilai_id' => 1,
                    'nama' => 'qunut',
                ],
            ];

        $listJenisMicro =
            [
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'rpp',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'materi',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'metode',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'kelas',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'rpp_detail',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'sistematika',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'tujuan',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'karakter',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'inovatif',
                ],
                [
                    'kategori_nilai_id' => 2,
                    'nama' => 'kegiatan_inti',
                ],
            ];

        $listWawancara = [
            [
                'kategori_nilai_id' => 3,
                'nama' => 'motivasi'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'kiat'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'mengatasi'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'memperlakukan'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'bekerja'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'gaji'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'bakat'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'taat'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'fisik'
            ],
            [
                'kategori_nilai_id' => 3,
                'nama' => 'kecakapan'
            ],
        ];

        KategoriNilai::insert($listKategori);
        JenisPenilaian::insert($listJenisAgama);
        JenisPenilaian::insert($listJenisMicro);
        JenisPenilaian::insert($listWawancara);
    }
}
