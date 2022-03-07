<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\PuntajeModel;
class Puntaje extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            //$users = DB::table('clientes_models')->get();
            $users = DB::table('puntaje_models')
            ->join('clientes_models', 'clientes_models.id', '=', 'puntaje_models.Cliente')
         
            ->select('clientes_models.NDocumento','clientes_models.NombreCliente'
            ,'clientes_models.Apellido' ,'puntaje_models.Puntaje','puntaje_models.NievelRiesgo',
            'puntaje_models.NumeroReportes')
            ->get();

      return  $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){


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
        $users = DB::table('puntaje_models')
        ->join('clientes_models', 'clientes_models.id', '=', 'puntaje_models.Cliente')
        ->select('clientes_models.NDocumento','clientes_models.NombreCliente'
        ,'clientes_models.Apellido' ,'puntaje_models.Puntaje','puntaje_models.NievelRiesgo',
        'puntaje_models.NumeroReportes')
        ->where('NDocumento', $id)
        ->get();
        return $users;
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
