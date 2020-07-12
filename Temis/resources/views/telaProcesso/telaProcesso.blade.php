@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/telaProcesso.css') }}" />
@endsection

@section('content')
    <div class="pesquisa">
        <form method="POST" action="{{ route('tProcesso.busca') }}">
            {{ csrf_field() }}
            <fieldset>
                <div>
                    <label for="codigo">Codigo</label>
                    <input name="codigo" type="text">  
                </div>
                <div>
                    <label for="cnj">CNJ</label>
                    <input name="cnj" type="text">  
                </div>
                <div>
                    <label for="nomereu">Nome Réu</label>
                    <input name="nomereu" type="text">  
                </div>
                <div>
                    <label for="docreu">CPF/CNPJ</label>
                    <input name="docreu" type="text">  
                </div>
                <button type="submit">Buscar</button>
            </fieldset>
        </form>
    </div>
    <div class="lista">
        <table class="tb-topo">
            <thead>
            <tr>
                <td>ID</td>
                <td>CODIGO</td>
                <td>CNJ</td>
                <td>NOME RÉU</td>
                <td>CPF/CNPJ</td>
                <td>STATUS</td>
            </tr>
            </thead>
            <tbody>
                @foreach ($items as $processo)
                    <tr>
                        <td>{{ $processo->id }}</td>
                        <td>{{ $processo->codigo }}</td>
                        <td>{{ $processo->cnj }}</td>
                        <td>{{ $processo->nomereu }}</td>
                        <td>{{ $processo->docreu }}</td>
                        <td>{{ $processo->status }}</td>
                    </tr>
                @endforeach
            </tbody>    
        </table>
    </div>
@endsection