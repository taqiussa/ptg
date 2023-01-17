<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendaftar extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the agama for the Pendaftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function agama(): HasMany
    {
        return $this->hasMany(Agama::class);
    }

    /**
     * Get all of the micro for the Pendaftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function micro(): HasMany
    {
        return $this->hasMany(Micro::class);
    }

    /**
     * Get all of the wawancara for the Pendaftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wawancara(): HasMany
    {
        return $this->hasMany(Wawancara::class);
    }

    /**
     * Get all of the penilaian for the Pendaftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function penilaian(): HasMany
    {
        return $this->hasMany(Penilaian::class);
    }
}
