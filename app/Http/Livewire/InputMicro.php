<?php

namespace App\Http\Livewire;

use App\Models\Micro;
use Livewire\Component;
use WireUi\Traits\Actions;

class InputMicro extends Component
{
    use Actions;

    public $pendaftar_id;
    public $rpp;
    public $materi;
    public $metode;
    public $kelas;
    public $rpp_detail;
    public $sistematika;
    public $tujuan;
    public $karakter;
    public $inovatif;
    public $kegiatan_inti;
    public $nilai;
    public $catatan;


    protected $rules = [
        'rpp' => 'required|numeric|min:1|max:25',
        'materi' => 'required|numeric|min:1|max:25',
        'metode' => 'required|numeric|min:1|max:25',
        'kelas' => 'required|numeric|min:1|max:25',
        'rpp_detail' => 'required|numeric|min:1|max:20',
        'sistematika' => 'required|numeric|min:1|max:10',
        'tujuan' => 'required|numeric|min:1|max:20',
        'karakter' => 'required|numeric|min:1|max:10',
        'inovatif' => 'required|numeric|min:1|max:20',
        'kegiatan_inti' => 'required|numeric|min:1|max:20',
        'catatan' => 'required',
    ];

    public function render()
    {
        return view('livewire.input-micro');
    }

    public function simpan()
    {
        $this->validate();

        try {

            $this->nilai =
                $this->rpp +
                $this->materi +
                $this->metode +
                $this->kelas +
                $this->rpp_detail +
                $this->sistematika +
                $this->tujuan +
                $this->karakter +
                $this->inovatif +
                $this->kegiatan_inti;
            Micro::updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'pendaftar_id' => $this->pendaftar_id
                ],
                [
                    'nilai' => $this->nilai,
                    'rpp' => $this->rpp,
                    'materi' => $this->materi,
                    'metode' => $this->metode,
                    'kelas' => $this->kelas,
                    'rpp_detail' => $this->rpp_detail,
                    'sistematika' => $this->sistematika,
                    'tujuan' => $this->tujuan,
                    'karakter' => $this->karakter,
                    'inovatif' => $this->inovatif,
                    'kegiatan_inti' => $this->kegiatan_inti,
                    'catatan' => $this->catatan,
                ]
            );

            $this->notification()->success(
                $title = 'Berhasil',
                $description = 'Berhasil Simpan Seleksi Micro Teaching'
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
