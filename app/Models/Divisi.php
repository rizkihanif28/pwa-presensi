<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_divisi',
        'nama_divisi'
    ];

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }
}
