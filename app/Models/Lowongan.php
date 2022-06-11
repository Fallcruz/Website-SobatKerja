<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function penyediaKerja(){
        return $this->belongsTo(PenyediaKerja::class, 'penyedia_kerja_id');
    }

    public function pencariKerjas(){
        return $this->belongsToMany(PencariKerja::class, 'apply_lowongan', 'lowongan_id', 'pencari_kerja_id');
    }
}
