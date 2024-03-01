<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wali_santri;

class Awal extends Model
{
    use HasFactory;

    protected $table = 'santri';

    public function wali()
    {
        return $this->hasMany(Wali_santri::class, 'santri_id', 'id');
    }
    
}
