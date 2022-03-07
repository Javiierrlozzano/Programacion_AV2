<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientesModel;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cliente= ClientesModel::all();
       return $cliente;
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new ClientesModel();
        $cliente ->NDocumento=$request-> NDocumento;
        $cliente ->NombreCliente=$request-> NombreCliente;
        $cliente ->Apellido=$request-> Apellido;
        $cliente ->Email=$request-> Telefono;
        
        $cliente ->save();
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
    public function update(Request $request)
    {
        $cliente =ClientesModel::findOrFail($request->id);
        $cliente ->NDocumento=$request-> NDocumento;
        $cliente ->NombreCliente=$request-> NombreCliente;
        $cliente ->Apellido=$request-> Apellido;
        $cliente ->Email=$request-> Telefono;
        $cliente ->save();
        return  $cliente;
        
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
       $cliente = ClientesModel::destroy($request->id);
        return $cliente;//
    }
}
