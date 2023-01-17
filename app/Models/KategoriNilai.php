<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriNilai extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the jenis for the KategoriNilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jenis(): HasMany
    {
        return $this->hasMany(JenisPenilaian::class);
    }
}
