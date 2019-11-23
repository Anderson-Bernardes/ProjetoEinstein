<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //metodo que carrega os posts do usuario

        $usuario = Auth::user();

        $usuario->getAuthIdentifier();

        $id = strval($usuario->getAuthIdentifier());
        $dados = array( 'user_id'  => $id);
        $dadosEncoded = json_encode($dados);

        $url = "https://api-rede-einstein.herokuapp.com/api/post/userPosts";
        //$url = "localhost:8080/api/post/userPosts";
        $authorization = "Authorization: Bearer ".Session::get('token');


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dadosEncoded);

        $result = curl_exec($ch);
        $retorno = json_decode($result, true);

        //print_r($retorno);


        return $retorno;
       /* $posts = DB::table('gruposposts')->where()
        return $posts;*/
    }

    public function getFeed(){
        $usuario = Auth::user();

        $usuario->getAuthIdentifier();

        $id = strval($usuario->getAuthIdentifier());
        $dados = array( 'user_id'  => $id);
        $dadosEncoded = json_encode($dados);

        $url = "https://api-rede-einstein.herokuapp.com/api/post/feed";
        //$url = "localhost:8080/api/post/feed";
        $authorization = "Authorization: Bearer ".Session::get('token');


        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dadosEncoded);

        $result = curl_exec($ch);
        $retorno = json_decode($result, true);

        //print_r($retorno);


        return $retorno;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request['titulo']) || isset($request['grupo']) && (isset($request['texto']) || ($request->hasFile('imagem') && $request->file('imagem')->isValid()))){
            date_default_timezone_set('America/Sao_Paulo');
            $user = Auth::user();

            if(isset($request['texto']))
                $texto = $request['texto'];
            else
                $texto = null;

            if(isset($request['imagem']))
                $imagem = $request['imagem'];
            else
                $imagem = null;


            $id = strval($user->getAuthIdentifier());

            $dados = array( 'user_id'  => $id,
                            'grupo_id'  => $request['grupo'],
                            'texto'     => $texto,
                            'imagem'    => $imagem,
                    //'created_at'=> date('Y-m-d H:i:s'),
                    //'updated_at'=> date('Y-m-d H:i:s')
            );
            $dadosEncoded = json_encode($dados);

            $url = "https://api-rede-einstein.herokuapp.com/api/post/criar";
            $authorization = "Authorization: Bearer ".Session::get('token');

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($ch,CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $dadosEncoded);

            $result = curl_exec($ch);
            $retorno = json_decode($result, true);
            print_r($retorno);

            if($retorno['status'] == 1)
                return redirect()->back()->with('success', 'Post Criado Com sucesso');
            else
                return redirect()->back()->with('error', 'Falha ao criar a postagem');
        }

        return redirect()->back()->with('error', 'Parametros não encontrados');
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
