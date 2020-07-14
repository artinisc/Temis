@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/telaUsuario.css') }}" />
@endsection

@section('content')
    <div class="pesquisa">
        <form method="POST" action="{{ route('tUsuario.busca') }}">
            {{ csrf_field() }}
            <fieldset>
                <table class="campos-processo">
                    <tbody>
                        <tr class="linhas-processo">
                            <td>
                                <label for="nome">Nome</label>
                                <br>
                                <input name="nome" type="text">  
                            </td>   
                            <td>
                                <label for="departamento">Departamento</label>
                                <br>
                                <select name="departamento">
                                    <option value="vazio"></option>
                                    <option value="Administrativo">Administrativo</option>
                                    <option value="Cobranca">Cobranca</option>
                                    <option value="Juridico">Juridico</option>
                                    <option value="RH">RH</option>
                                    <option value="TI">TI</option>
                                </select>
                            </td> 
                            <td>  
                                <label for="btn"></label>
                                <br> 
                                <button type="submit">Buscar</button>
                            </td>
                        </tr>  
                    </tbody>  
                </table>   
            </fieldset>          
        </form>
    </div>
    <br>
    <br>
    <div class="lista">
        <fieldset>
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
                            <td><a href="{{ route('usuario.edit', $usuario) }}">{{ $usuario->name }}</a></td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->departamento }}</td>
                        </tr>
                    @endforeach
                </tbody>    
            </table>
        </fieldset>    
    </div>
@endsection