<?php

namespace App\Repositories;

use App\Interfaces\DDDFixoRepositoryInterface;
use App\Models\DDDFixo;
use Illuminate\Support\Collection;

class DDDFixoRepository implements DDDFixoRepositoryInterface
{
    public function getAllDDDs(array|null $id): Collection
    {
        return isset($id) ?  DDDfixo::where('origem', "=",  $id['origem'])->where('destino', "=", $id['destino'])->get() : DDDFixo::all();
    }
}
