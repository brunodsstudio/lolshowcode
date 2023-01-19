<?php

namespace App\Http\Controllers;

use App\Services\DDDFixoService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Exception;
use Illuminate\Database\QueryException;


class DDDFixoController extends Controller
{

    public function __construct(DDDFixoService $DDDFixoService)
    {
        $this->DDDFixoService = $DDDFixoService;
    }

    protected $DDDFixoService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DDDFixoService  $DDDFixoService,  Request $request): JsonResponse
    {


  

        if(isset($request->origem) && isset($request->destino)){
            $aDDDFixoService = array('origem' => $request->origem, 'destino' => $request->destino);
        } else {

            return response()->json(
                [
                    'data' => $DDDFixoService->getDDDs()
                ], 
                Response::HTTP_OK
            );
        }

        
        $items = $DDDFixoService->getMonsterByOrigemDestino($aDDDFixoService);
      

        if(!$items->isNotEmpty()){
            return response()->json([
                'message' => 'The DDDs does are relationed.'
            ], Response::HTTP_NOT_FOUND);
        }
            
        return response()->json(
            [
                'data' => $items
            ], Response::HTTP_OK);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DDDFixo  $dDDFixo
     * @return \Illuminate\Http\Response
     */
    public function show(DDDFixo $dDDFixo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DDDFixo  $dDDFixo
     * @return \Illuminate\Http\Response
     */
    public function edit(DDDFixo $dDDFixo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DDDFixo  $dDDFixo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DDDFixo $dDDFixo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DDDFixo  $dDDFixo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DDDFixo $dDDFixo)
    {
        //
    }
}
