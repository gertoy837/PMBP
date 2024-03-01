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

    public function gelombang() {
        return $this->belongsTo(Gelombang::class, 'gel_id', 'id');
    }

    public function wali_santri() {
        return $this->hasMany(Wali_santri::class, 'santri_id', 'id');
    }
}

