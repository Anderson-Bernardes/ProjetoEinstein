<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $dados = DB::table('users')->join('amigos', function ($join) {
            $join->on('users.id', '=', 'amigos.user_id')->where('amigos.user_id2', '=', Auth::user()->getAuthIdentifier());
        }
        )->select('*')->get();

        return $dados;
    }

    public function remove(Request $request){
        dd($request);
    }


}
