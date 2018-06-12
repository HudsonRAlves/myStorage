<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\painel\Anuncio;
use Illuminate\Support\Facades\DB;

class apiAnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //VERIFICAR POIS ESTA DANDO ERRO
        $Dados = DB::table('anuncios')
        ->select(
            'id',
            'nome',
            'cep',
            'rua',
            'complemento',
            'bairro',
            'cidade',
            'estado',
            'lat',
            'lgn',
            'figura1',
            'figura2',
            'figura3',
            'figura4',
            'user_id')->get();
                
        return $Dados;

        $Anuncio = anuncio::with('anuncios')->get();
        return response()->json($Anuncio);  


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
