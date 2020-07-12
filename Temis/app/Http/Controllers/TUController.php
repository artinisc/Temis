<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::orderBy('id','desc')->get();
        return view('telaUsuario.telaUsuario', array('items' => $items));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
    
    public function busca(Request $request)
    {

        $nome = $request->nome;
        $departamento = $request->departamento;

        if($nome != null && $departamento != "vazio"){
            $items = User::where('name', 'LIKE', "%{$nome}%")->where('departamento', 'LIKE', "%{$departamento}%")->get();
            return view('telaUsuario.telaUsuario', array('items' => $items));
        }else if($nome != null){
            $items = User::where('name', 'LIKE', "%{$nome}%")->get();
            return view('telaUsuario.telaUsuario', array('items' => $items));
        }else if($departamento != "vazio"){
            $items = User::where('departamento', 'LIKE', "%{$departamento}%")->get();
            return view('telaUsuario.telaUsuario', array('items' => $items));
        }else{
            $items = User::orderBy('id','desc')->take(10)->get();
            return view('telaUsuario.telaUsuario', array('items' => $items));
        }
    }

}
