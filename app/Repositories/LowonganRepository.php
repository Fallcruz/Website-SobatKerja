<?php 

namespace App\Repositories;

use App\Models\Lowongan;

class LowonganRepository implements LowonganInterface{
    public function all(){
        return Lowongan::all();
    }
    public function store(array $data){
        return Lowongan::create($data);
    }
}
?>