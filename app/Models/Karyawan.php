<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jabatan_id',
        'divisi_id',
        'nip',
        'nama',
        'email',
        'telepon',
        'alamat'
    ];


    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
