<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
       /* $posts = DB::table('gruposposts')->where()
        return $posts;*/
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
        if(isset($request['grupo']) && (isset($request['texto']) || ($request->hasFile('imagem') && $request->file('imagem')->isValid()))){
            date_default_timezone_set('America/Sao_Paulo');
            $user = Auth::user();
            $postsModel =  new Posts();

            if(isset($request['texto']))
                $texto = $request['texto'];
            else
                $texto = null;

            if(isset($request['imagem']))
                $imagem = $request['imagem'];
            else
                $imagem = null;

            $dados =['user_id'  => $user->getAuthIdentifier(),
                    'grupo_id'  => $request['grupo'],
                    'texto'     => $texto,
                    'imagem'    => $imagem,
                    'created_at'=> date('Y-m-d H:i:s'),
                    'updated_at'=> date('Y-m-d H:i:s')];
            if($postsModel->create($dados))
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
