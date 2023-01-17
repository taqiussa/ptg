<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Penilaian;
use App\Models\Wawancara;
use WireUi\Traits\Actions;

class InputWawancara extends Component
{
    use Actions;

    public $pendaftar_id;
    public $motivasi;
    public $kiat;
    public $mengatasi;
    public $memperlakukan;
    public $bekerja;
    public $gaji;
    public $bakat;
    public $taat;
    public $fisik;
    public $kecakapan;
    public $nilai;
    public $catatan;

    protected $rules =
    [
        'motivasi' => 'required|numeric|min:1|max:10',
        'kiat' => 'required|numeric|min:1|max:10',
        'mengatasi' => 'required|numeric|min:1|max:10',
        'memperlakukan' => 'required|numeric|min:1|max:10',
        'bekerja' => 'required|numeric|min:1|max:10',
        'gaji' => 'required|numeric|min:1|max:10',
        'bakat' => 'required|numeric|min:1|max:10',
        'taat' => 'required|numeric|min:1|max:10',
        'fisik' => 'required|numeric|min:1|max:10',
        'kecakapan' => 'required|numeric|min:1|max:10',
        'catatan' => 'required',
    ];

    public function render()
    {
        return view('livewire.input-wawancara');
    }

    public function simpan()
    {
        $this->validate();

        try {

            $this->nilai =
                $this->motivasi +
                $this->kiat +
                $this->mengatasi +
                $this->memperlakukan +
                $this->bekerja +
                $this->gaji +
                $this->bakat +
                $this->taat +
                $this->fisik +
                $this->kecakapan;

            Wawancara::updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'pendaftar_id' => $this->pendaftar_id
                ],
                [
                    'nilai' => $this->nilai,
                    'motivasi' => $this->motivasi,
                    'kiat' => $this->kiat,
                    'mengatasi' => $this->mengatasi,
                    'memperlakukan' => $this->memperlakukan,
                    'bekerja' => $this->bekerja,
                    'gaji' => $this->gaji,
                    'bakat' => $this->bakat,
                    'taat' => $this->taat,
                    'fisik' => $this->fisik,
                    'kecakapan' => $this->kecakapan,
                    'catatan' => $this->catatan,
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 15
                ],
                [
                    'nilai' => $this->motivasi
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 16
                ],
                [
                    'nilai' => $this->kiat
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 17
                ],
                [
                    'nilai' => $this->mengatasi
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 18
                ],
                [
                    'nilai' => $this->memperlakukan
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 19
                ],
                [
                    'nilai' => $this->bekerja
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 20
                ],
                [
                    'nilai' => $this->gaji
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 21
                ],
                [
                    'nilai' => $this->bakat
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 22
                ],
                [
                    'nilai' => $this->taat
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 23
                ],
                [
                    'nilai' => $this->fisik
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 3,
                    'jenis_penilaian_id' => 24
                ],
                [
                    'nilai' => $this->kecakapan
                ]
            );

            $this->notification()->success(
                $title = 'Berhasil',
                $description = 'Berhasil Simpan Seleksi Wawancara'
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
