<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DataCreditosController extends Controller
{
public function index(Request $request){
    $Numero= request('Buscar');
    $user= HTTP::get('http://127.0.0.1:8000/api/puntaje/'. $Numero);
        $userArray= $user->json();
    return view('datacredito/datacreditos',compact('userArray'));
}    
  
}
