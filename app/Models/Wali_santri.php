<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;

class Wali_santri extends Model
{
    use HasFactory;

    protected $table = 'wali_santri';

    public function santri() {
        return $this->belongsTo(Santri::class, 'santri_id', 'id');
    }
}
