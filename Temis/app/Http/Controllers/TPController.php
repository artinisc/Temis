<?php

namespace App\Http\Controllers;

use App\Processo;
use Illuminate\Http\Request;

class TPController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Processo::orderBy('id','desc')->get();
        return view('telaProcesso.telaProcesso', array('items' => $items));
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
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function show(Processo $processo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function edit(Processo $processo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Processo $processo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Processo $processo)
    {
        //
    }

    public function busca(Request $request)
    {

        $codigo = $request->codigo;
        $cnj = $request->cnj;
        $nomereu = $request->nomereu;
        $docreu = $request->docreu;

        if($codigo != null){
            $items = Processo::where('codigo', 'LIKE', "%{$codigo}%")->get();
            return view('telaProcesso.telaProcesso', array('items' => $items));
        }else if($cnj != null){
            $items = Processo::where('cnj', 'LIKE', "%{$cnj}%")->get();
            return view('telaProcesso.telaProcesso', array('items' => $items));
        }else if($nomereu != null){
            $items = Processo::where('nomereu', 'LIKE', "%{$nomereu}%")->get();
            return view('telaProcesso.telaProcesso', array('items' => $items));
        }else if($docreu != null){    
            $items = Processo::where('docreu', 'LIKE', "%{$docreu}%")->get();
            return view('telaProcesso.telaProcesso', array('items' => $items));
        }else{
            $items = Processo::orderBy('id','desc')->take(10)->get();
            return view('telaProcesso.telaProcesso', array('items' => $items));
        }
    }

}
