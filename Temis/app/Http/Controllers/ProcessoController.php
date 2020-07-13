<?php

namespace App\Http\Controllers;

use App\Processo;
use Illuminate\Http\Request;

class ProcessoController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('processo.cadastraProcesso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novoProcesso = new Processo;
        $novoProcesso->codigo = $request->codigo;
        $novoProcesso->idjuizo = $request->idjuizo;
        $novoProcesso->cnj = $request->cnj;
        $novoProcesso->comarca = $request->comarca;
        $novoProcesso->status = $request->status;
        $novoProcesso->ncontrato = $request->ncontrato;
        $novoProcesso->contratante = $request->contratante;
        $novoProcesso->carteira = $request->carteira;
        $novoProcesso->tipo = $request->tipo;
        $novoProcesso->bem = $request->bem;
        $novoProcesso->valor = $request->valor;
        $novoProcesso->andamento = $request->andamento;
        $novoProcesso->descricao = $request->descricao;
        $novoProcesso->nomeautor = $request->nomeautor;
        $novoProcesso->docautor = $request->docautor;
        $novoProcesso->nomereu = $request->nomereu;
        $novoProcesso->docreu = $request->docreu;
        $novoProcesso->endreu = $request->endreu;
        $novoProcesso->cidadereu = $request->cidadereu;
        $novoProcesso->cepreu = $request->cepreu;
        $novoProcesso->telefonereu = $request->telefonereu;
        $novoProcesso->save();

        $items = Processo::orderBy('id','desc')->take(10)->get();
        return view('telaProcesso.telaProcesso', array('items' => $items));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function show(Processo $processo)
    {
        return view('processo.processo', ['processo' => $processo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Processo  $processo
     * @return \Illuminate\Http\Response
     */
    public function edit(Processo $processo)
    {
        return view('processo.alteraProcesso', ['processo' => $processo]);
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
        $processo->codigo = $request->codigo;
        $processo->idjuizo = $request->idjuizo;
        $processo->cnj = $request->cnj;
        $processo->comarca = $request->comarca;
        $processo->status = $request->status;
        $processo->ncontrato = $request->ncontrato;
        $processo->contratante = $request->contratante;
        $processo->carteira = $request->carteira;
        $processo->tipo = $request->tipo;
        $processo->bem = $request->bem;
        $processo->valor = $request->valor;
        $processo->andamento = $request->andamento;
        $processo->descricao = $request->descricao;
        $processo->nomeautor = $request->nomeautor;
        $processo->docautor = $request->docautor;
        $processo->nomereu = $request->nomereu;
        $processo->docreu = $request->docreu;
        $processo->endreu = $request->endreu;
        $processo->cidadereu = $request->cidadereu;
        $processo->cepreu = $request->cepreu;
        $processo->telefonereu = $request->telefonereu;
        $processo->save();

        $items = Processo::orderBy('id','desc')->take(10)->get();
        return view('telaProcesso.telaProcesso', array('items' => $items));
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
}
