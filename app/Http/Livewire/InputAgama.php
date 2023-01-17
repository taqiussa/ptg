<?php

namespace App\Http\Livewire;

use App\Models\Agama;
use App\Models\Penilaian;
use Livewire\Component;
use WireUi\Traits\Actions;

class InputAgama extends Component
{

    use Actions;

    public $pendaftar_id;
    public $tajwid;
    public $kelancaran;
    public $iftitah;
    public $qunut;
    public $nilai;
    public $catatan;

    protected $rules = [
        'pendaftar_id' => 'required',
        'tajwid' => 'required|numeric|min:10|max:25',
        'kelancaran' => 'required|numeric|min:10|max:25',
        'iftitah' => 'required|numeric|min:10|max:25',
        'qunut' => 'required|numeric|min:10|max:25',
        'catatan' => 'required'
    ];

    public function render()
    {
        return view('livewire.input-agama');
    }

    public function simpan()
    {
        $this->validate();

        try {

            $this->nilai = $this->tajwid + $this->kelancaran + $this->iftitah + $this->qunut;
            Agama::updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'pendaftar_id' => $this->pendaftar_id
                ],
                [
                    'tajwid' => $this->tajwid,
                    'kelancaran' => $this->kelancaran,
                    'iftitah' => $this->iftitah,
                    'qunut' => $this->qunut,
                    'nilai' => $this->nilai,
                    'catatan' => $this->catatan,
                ]
            );

            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 1,
                    'jenis_penilaian_id' => 1
                ],
                [
                    'nilai' => $this->tajwid
                ]
            );
            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 1,
                    'jenis_penilaian_id' => 2
                ],
                [
                    'nilai' => $this->kelancaran
                ]
            );
            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 1,
                    'jenis_penilaian_id' => 3
                ],
                [
                    'nilai' => $this->iftitah
                ]
            );
            Penilaian::updateOrCreate(
                [
                    'pendaftar_id' => $this->pendaftar_id,
                    'kategori_nilai_id' => 1,
                    'jenis_penilaian_id' => 4
                ],
                [
                    'nilai' => $this->qunut
                ]
            );
            $this->notification()->success(
                $title = 'Berhasil',
                $description = 'Berhasil Simpan Seleksi Agama'
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
