<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;

class Wali_santri extends Model
{
    use HasFactory;

    protected $table = 'wali_santri';

    protected $fillable = [
        'nama_ayah',
        'tmp_lahir_a',
        'tgl_lahir_a',
        'no_hp_a',
        'pkj_a',
        'phs_a',
        'nama_ibu',
        'tmp_lahir_i',
        'tgl_lahir_i',
        'no_hp_i',
        'pkj_i',
        'phs_i',
        'alamat',
        'santri_id'
    ];

    public function santri() {
        return $this->belongsTo(Santri::class, 'santri_id', 'id');
    }
}
