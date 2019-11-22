<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GruposModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user=Auth::user();
        $grupos=DB::table('grupos')->select('id', 'nome', 'tema' ,'foto')
                    ->where('idUsuario', '=', $user->getAuthIdentifier())->get();



        return view('pagina-grupo', ['user'=>$user], ['grupos'=>$grupos]);
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
        $user=Auth::user();
        $gruposModel = new GruposModel();
        $teste=DB::table('grupos')->select('nome')->where('nome', '=', $request['nome'])->get();

        if($request->hasFile('foto') && $request->file('foto')->isValid()) {
            if ($teste->isEmpty()) {
                $extencao = $request->file('foto')->extension();
                $nomeArquivo = kebab_case($request['nome']) . $user->getAuthIdentifier() . '.' . $extencao;

                $upload = $request['foto']->storeAs('Grupos', $nomeArquivo);

                $dados = ['nome' => $request['nome'],
                    'tema' => $request['tema'], 'foto' => $nomeArquivo,
                    'idUsuario' => $user->getAuthIdentifier()];

                if ($gruposModel->create($dados) && $upload) {
                    return redirect()->route('grupos')->with('success', 'Grupo Criado Com sucesso');
                } else
                    return redirect()->back()->with('error', 'Falha no banco de dados ao criar grupo');

            } else
                return redirect()->back()->with('error', 'Nome do grupo já cadastado'); //retorna falha de grupo ja cadastado com esse nome
        }else
            return redirect()->back()->with('error', 'Imagem não enviada ou invalida'); //retorna falha de arquivo de imagem nao enviado ou nao é valido
    }

    public function GetGrupos(){
        $dados = DB::table('grupos')
            ->join('grupos_curtidos_usuario',
                function($join){
                    $join->on('grupos.id', '=', 'grupos_curtidos_usuario.idPagina')
                    ->where('grupos_curtidos_usuario.idUsuario', '=', Auth::user()->getAuthIdentifier());
        })->select('nome', 'id')->get();

        return $dados;
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
