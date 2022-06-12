<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PenyediaKerja extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    public function lowongans(){
        return $this->hasMany(Lowongan::class, 'penyedia_kerja_id');
    }
}
