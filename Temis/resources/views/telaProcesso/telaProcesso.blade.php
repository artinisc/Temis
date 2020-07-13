@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/telaProcesso.css') }}" />
@endsection

@section('content')
    <div class="pesquisa">
        <form method="POST" action="{{ route('tProcesso.busca') }}">
            {{ csrf_field() }}
            <table class="campos-processo">
                <tbody>
                    <tr class="linhas-processo">
                        <td>
                            <label for="codigo">Codigo</label>
                            <br>
                            <input name="codigo" type="text">  
                        </td>
                        <td>
                            <label for="cnj">CNJ</label>
                            <br>
                            <input name="cnj" type="text">  
                        </td>
                        <td>
                            <label for="nomereu">Nome Réu</label>
                            <br>
                            <input name="nomereu" type="text">  
                        </td>
                        <td>
                            <label for="docreu">CPF/CNPJ</label>
                            <br>
                            <input name="docreu" type="text">  
                        </td>
                        <td>
                            <label for="btn"></label>
                            <br>
                            <button type="submit">Buscar</button>
                        </td>
                    </tr>    
                </tbody>  
            </table>
        </form>
    </div>
    <br>
    <br>
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
                        <td><a href="{{ route('processo.show', $processo) }}">{{ $processo->codigo }}</a></td>
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