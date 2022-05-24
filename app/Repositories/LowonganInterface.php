<?php 

namespace App\Repositories;

interface LowonganInterface
{
    public function all();
    public function store(array $data);
}

?>