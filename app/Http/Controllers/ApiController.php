<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function pendaftar(Request $request): Collection
    {
        return Pendaftar::query()
            ->select('id', 'nama')
            ->orderBy('nama')
            ->when(
                $request->search,
                fn ($query) => $query
                    ->where('nama', 'like', "%{$request->search}%")
            )
            ->get();
    }
}
