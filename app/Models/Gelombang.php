<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;

class Gelombang extends Model
{
    use HasFactory;

    protected $table = 'gelombang';

    public function santri() {
        return $this->hasMany(Santri::class, 'gel_id', 'id');
    }
}


