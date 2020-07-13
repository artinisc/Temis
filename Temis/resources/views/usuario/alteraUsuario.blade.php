@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/alteraUsuario.css') }}" />
@endsection

@section('content')
    <div class="tela-usuario">
        <form method="POST" action="{{ route('usuario.update', $usuario) }}">
            @method('PUT')
            {{ csrf_field() }}
            <fieldset>
                <table class="campos-usuario">
                    <thead>
                        <tr>
                            <td>DADOS USUARIO</td>
                        </tr>    
                    </thead>
                    <tbody>
                        <tr class="linhas-usuario">
                            <td>
                                <br>
                                <label for="name">Nome</label>
                                <br>
                                <input name="name" type="text" maxlength="50" value="{{ old("name", $usuario->name) }}">  
                            </td>
                            <td>
                                <br>
                                <label for="email">E-mail</label>
                                <br>
                                <input name="email" type="text"  maxlength="100" value="{{ old("email", $usuario->email) }}">  
                            </td>
                            <td>
                                <br>
                                <label for="password">Senha</label>
                                <br>
                                <input name="password" type="password"  maxlength="20" value="{{ old("password", $usuario->password) }}">  
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                <p></p>
                            </td>   
                        </tr>   
                        <tr class="linhas-usuario">
                            <td>
                                <label for="departamento">Departamento</label>
                                <br>
                                <select name="departamento"><option selected>{{ old("departamento", $usuario->departamento) }}</option>
                                    <option value="Administrativo">Administrativo</option>
                                    <option value="Cobranca">Cobranca</option>
                                    <option value="Juridico">Juridico</option>
                                    <option value="RH">RH</option>
                                    <option value="TI">TI</option>
                                </select>  
                            </td>
                            <td>
                                <label for="setor">Setor</label>
                                <br>
                                <select name="setor"><option selected>{{ old("setor", $usuario->setor) }}</option>
                                    <option value="BB">BB</option>
                                    <option value="Desenvolvimento">Desenvolvimento</option>
                                    <option value="Geral">Geral</option>
                                    <option value="Santander">Santander</option>
                                    <option value="Suporte">Suporte</option>
                                </select>  
                            </td>
                            <td>
                                <label for="perfil">Perfil</label>
                                <br>
                                <select name="perfil"><option selected>{{ old("perfil", $usuario->perfil) }}</option>
                                    <option value="Administrador">Administrador</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Usuario">Usuario</option>
                                </select>
                            </td>
                            <td>
                                <label for="ativo">Status</label>
                                <br>
                                <select name="ativo"><option selected>{{ old("ativo", $usuario->ativo) }}</option>
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p></p>
                            </td>   
                        </tr> 
                        <tr class="linhas-usuario">
                            <td>
                                <button type="submit">Salvar</button>
                            </td>
                        </tr>
                    </tbody>        
                </table>  
            </fieldset>
        </form>
    </div>
@endsection