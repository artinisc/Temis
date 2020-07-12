@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/telaUsuario.css') }}" />
@endsection

@section('content')
    <div class="pesquisa">
        <form method="POST" action="{{ route('tUsuario.busca') }}">
            {{ csrf_field() }}
            <fieldset>
                <div>
                    <label for="nome">Nome</label>
                    <input name="nome" type="text">  
                </div>   
                <div>
                    <label for="departamento">Departamento</label>
                    <select name="departamento">
                        <option value="vazio"></option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Cobranca">Cobranca</option>
                        <option value="Juridico">Juridico</option>
                        <option value="RH">RH</option>
                        <option value="TI">TI</option>
                    </select>
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
                <td>NOME</td>
                <td>LOGIN</td>
                <td>DEPARTAMENTO</td>
            </tr>
            </thead>
            <tbody>
                @foreach ($items as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->departamento }}</td>
                    </tr>
                @endforeach
            </tbody>    
        </table>
    </div>
@endsection