<?php

namespace App\Http\Livewire;

use App\Models\MataPelajaran;
use App\Models\Pendaftar;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class InputPendaftar extends Component
{
    use Actions;
    use WithFileUploads;

    public $nama;
    public $mata_pelajaran_id;
    public $jenis_kelamin;
    public $usia;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $status;
    public $alamat;
    public $pendidikan;
    public $prodi;
    public $jurusan;
    public $kampus;
    public $foto;
    public $user_id;

    public $listMapel = [];

    protected $rules = [
        'nama' => 'required',
        'mata_pelajaran_id' => 'required',
        'jenis_kelamin' => 'required',
        'usia' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'status' => 'required',
        'alamat' => 'required',
        'pendidikan' => 'required',
        'prodi' => 'required',
        'jurusan' => 'required',
        'kampus' => 'required',
        'user_id' => 'required'
    ];

    public function render()
    {
        $this->listMapel = MataPelajaran::get();
        $this->user_id = auth()->user()->id;
        return view('livewire.input-pendaftar');
    }
    public function simpan()
    {
        $validate = $this->validate();
        $pendaftar = Pendaftar::create($validate);
        $pathFoto = $this->foto->store('foto');
        $pendaftar->foto = $pathFoto;
        $pendaftar->save();
        
        $this->notification()->success(
            $title = 'Berhasil',
            $description = 'Berhasil Input Pendaftar'
        );
    }
}
