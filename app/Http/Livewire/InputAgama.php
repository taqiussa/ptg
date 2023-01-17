<?php

namespace App\Http\Livewire;

use Livewire\Component;
use WireUi\Traits\Actions;

class InputAgama extends Component
{

    use Actions;

    public $user_id;
    public $pendaftar_id;
    public $tajwid;
    public $kelancaran;
    public $iftitah;
    public $qunut;
    public $nilai;
    public $catatan;

    protected $rules = [
        'user_id' => 'required'
    ];
    public function render()
    {
        return view('livewire.input-agama');
    }
}
