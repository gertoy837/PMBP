<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gelombang;
use App\Models\Wali_santri;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';

    protected $fillable = [
        'nik',
        'nisn',
        'nama_lengkap',
        'nama_panggil',
        'tmp_lahir',
        'tgl_lahir',
        'no_hp',
        'gel_id',
        'kk',
        'foto',
        'ijazah',
        'rapot',
    ];

    public function gelombang() {
        return $this->belongsTo(Gelombang::class, 'gel_id', 'id');
    }

    public function wali_santri() {
        return $this->hasOne(Wali_santri::class, 'santri_id', 'id');
    }
}

