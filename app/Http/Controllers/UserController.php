<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ac =  new AmigosController();
        $amigos = $ac->GetAmigos();
        $pc = new PostsController();
        $postagens = $pc->index();
        $user=Auth::user();
        //print_r($postagens['postagens']);
        return view('perfil-usuario', ['user'=>$user, 'postagens'=> $postagens, 'amigos'=>$amigos]);
    }

    public function updateFotoUsario(Request $request){
        date_default_timezone_set('America/Sao_Paulo');
        $user=Auth::user();

        if($request->hasFile('foto') && $request->file('foto')->isValid()){
            $extencao = $request->file('foto')->extension();
            $nomeArquivo = kebab_case($user->getAuthIdentifierName()) . $user->getAuthIdentifier() . '.' . $extencao;

            $upload = $request['foto']->storeAs('FotoPerfil', $nomeArquivo);
            $dado=['foto'=>$nomeArquivo];
            $dado['updated_at']=date('Y-m-d H:i:s');

            if($upload && DB::table('users')->where('id', '=', $user->getAuthIdentifier())->update($dado)){
                return redirect()->route('config')->with('success', 'Foto alterada Com sucesso');
            }
            else
                return redirect()->back()->with('error', 'Falha ao adicionar foto');
        }
        return redirect()->back()->with('error', 'Imagem não enviada ou invalida');
    }

    public function updateDadosUser(Request $request){
        date_default_timezone_set('America/Sao_Paulo');
        $user=Auth::user();
        //$nascimento= $request['dia-nasc'].'/'.$request['mes-nasc'].'/'.$request['ano-nasc'];


        if(isset($request['nome'])&& $request['nome'] != null)
            $dados['name']=$request['nome'];
        if(isset($request['sobrenome'])&& $request['sobrenome'] != null)
            $dados['sobrenome']=$request['sobrenome'];
        if(isset($request['user'])&& $request['user'] != null)
            $dados['username']=$request['user'];
        /*if(isset($request['dia-nasc']) && isset($request['mes-nasc']) && isset($request['ano-nasc'])){
            $nascimento = ['ano-nasc'].'-'.$request['mes-nasc'].'-'.$request['dia-nasc'];
            $dados['nascimento']=$nascimento;
        }*/
        if(isset($request['sexo'])&& $request['sexo'] != null)
            $dados['sexo']=$request['sexo'];
        if(isset($request['uf']) && $request['uf'] != null)
            $dados['UF']=$request['uf'];
        if(isset($request['categoria'])&& $request['categoria'] != null)
            $dados['categoria']=$request['categoria'];

        $dados['updated_at']=date('Y-m-d H:i:s');

        if(DB::table('users')->where('id', '=', $user->getAuthIdentifier())->update($dados))
        {
            return redirect()->route('config')->with('success', 'Configuracões salvas com sucesso');
        }
        return redirect()->back()->with('error', 'Falha ao salvar configuracões');
    }

    public function GetAmigos(){
        $user=Auth::user();

        $dados = DB::table('users')->join('amigos', function($join){
        $join->on('users.id', '=', 'amigos.user_id')->where('amigos.user_id2', '=', '1');
        }
        )->select('name')->get();

        return $dados;
    }
}
