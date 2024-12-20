<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;
    protected $guarded= [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class); // Siswa berafiliasi dengan Kelas
    }
}
