<?php

namespace App\Services;

use App\Repositories\DDDFixoRepository;
use App\Models\DDDFixo;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

class DDDFixoService
{
    /**
     *
     * @var $DDDFixoRepository
     */
    protected $DDDFixoRepository;

    /**
     * 
     *
     * @param DDDFixoRepository $DDDFixoRepository
     *
     */
    public function __construct(DDDFixoRepository $DDDFixoRepository)
    {
        $this->DDDFixoRepository= $DDDFixoRepository;
    }

    /**
     * 
     *
     * @return Collection
     *
     */
    public function getDDDs(): Collection
    {
       return $this->DDDFixoRepository->getAllDDDs(null);
    }


    /**
     * 
     *
     * @return Collection
     *
     */
    public function getMonsterByOrigemDestino(array $id): Collection
    {
        return $this->DDDFixoRepository->getAllDDDs($id);
    }

    

}
