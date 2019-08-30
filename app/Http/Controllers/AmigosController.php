<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AmigosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user=Auth::user();
        $amigos = $this->GetAmigos();
        return view('amigos', ['user'=>$user], ['amigos' => $amigos]);
    }

    public function GetAmigos()
    {
        $usuario = Auth::user();

        $usuario->getAuthIdentifier();

        $id = strval($usuario->getAuthIdentifier());

        $dados = array( 'user_id'  => $id);
        $dadosEncoded = json_encode($dados);

        $url = "https://api-rede-einstein.herokuapp.com/api/amigo/getuseramigos";
        //$url = "localhost:8080/api/amigo/getuseramigos";
        $authorization = "Authorization: Bearer ".Session::get('token');

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dadosEncoded);

        $result = curl_exec($ch);
        $retorno = json_decode($result, true);
/*
  //      print_r($retorno);
        foreach ($retorno['amigos'] as $amigo){
            echo $amigo['name'];
        }*/


        return $retorno;
    }

    public function remove(Request $request){
        dd($request);
    }


}
