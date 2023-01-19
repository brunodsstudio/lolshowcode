<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface DDDFixoRepositoryInterface
{
    public function getAllDDDs(array|null $id): Collection;
}
