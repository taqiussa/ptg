<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisPenilaian extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the kategori that owns the JenisPenilaian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriNilai::class)->withDefault();
    }
}
