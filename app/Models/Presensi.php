<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'karyawan_id',
        'tgl_presensi',
        'jam_masuk',
        'jam_pulang',
        'foto_masuk',
        'foto_pulang',
        'location'
    ];

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class);
    }
}
