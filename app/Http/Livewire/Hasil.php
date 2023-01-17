<?php

namespace App\Http\Livewire;

use App\Models\MataPelajaran;
use App\Models\Pendaftar;
use Livewire\Component;
use WireUi\Traits\Actions;

class Hasil extends Component
{
    use Actions;

    public $search;
    public $mapel;


    public function render()
    {
        return view(
            'livewire.hasil',
            [
                'listPendaftar' => Pendaftar::with([
                    'agama',
                    'micro',
                    'wawancara',
                    'penilaian'
                ])
                    ->whereMataPelajaranId($this->mapel)
                    ->when($this->search, fn ($q) => $q->where('nama', 'like', "%{$this->search}%"))
                    ->withSum('penilaian as total', 'nilai')
                    ->get()
                    ->sortByDesc('total'),
                'listMapel' => MataPelajaran::orderBy('nama')->get(),
            ]
        );
    }
}
