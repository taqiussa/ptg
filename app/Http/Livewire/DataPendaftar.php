<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pendaftar;
use WireUi\Traits\Actions;
use App\Models\MataPelajaran;

class DataPendaftar extends Component
{
    use Actions;

    public $search;
    public $mapel;

    public function render()
    {
        return view(
            'livewire.data-pendaftar',
            [
                'listPendaftar' => Pendaftar::whereMataPelajaranId($this->mapel)
                    ->when($this->search, fn ($q) => $q->where('nama', 'like', "%{$this->search}%"))
                    ->orderBy('nama')
                    ->get(),
                'listMapel' => MataPelajaran::orderBy('nama')->get(),
            ]
        );
    }
}
