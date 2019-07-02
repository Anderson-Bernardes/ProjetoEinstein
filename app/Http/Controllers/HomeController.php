<?php

namespace App\Http\Controllers;

use App\GruposModel;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ct= new GrupoController();
        $grupos=$ct->GetGrupos();
        $user=Auth::user();
        return view('home', ['user'=>$user], ['grupos'=>$grupos]);
    }

}
