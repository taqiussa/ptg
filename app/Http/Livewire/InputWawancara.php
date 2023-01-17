<?php

namespace App\Http\Livewire;

use App\Models\Wawancara;
use Livewire\Component;
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

            $this->notification()->success(
                $title = 'Berhasil',
                $description = 'Berhasil Simpan Seleksi Wawancara'
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
