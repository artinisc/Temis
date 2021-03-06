@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/register.css') }}" />
@endsection

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <fieldset>
            <table class="campos-usuario">
                <thead>
                    <tr>
                        <p id="msg-topo">DADOS USUARIO</p>
                    </tr>    
                </thead>
                <tbody>
                    <tr class="linhas-usuario">
                        <td>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </td>    
                        <td>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>
                            <p></p>
                        </td>   
                    </tr>
                    <tr class="linhas-usuario">
                        <td>       
                            <div class="form-group row">
                                <label for="departamento" class="col-md-4 col-form-label text-md-right">{{ __('Departamento') }}</label>
                                <div class="col-md-6">
                                    <select id="departamento" class="form-control" name="departamento">
                                        <option value="Administrativo">Administrativo</option>
                                        <option value="Cobranca">Cobranca</option>
                                        <option value="Juridico">Juridico</option>
                                        <option value="RH">RH</option>
                                        <option value="TI">TI</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row">
                                <label for="setor" class="col-md-4 col-form-label text-md-right">{{ __('Setor') }}</label>
                                <div class="col-md-6">
                                    <select id="setor" class="form-control" name="setor">
                                        <option value="BB">BB</option>
                                        <option value="Desenvolvimento">Desenvolvimento</option>
                                        <option value="Geral">Geral</option>
                                        <option value="Santander">Santander</option>
                                        <option value="Suporte">Suporte</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row">
                                <label for="perfil" class="col-md-4 col-form-label text-md-right">{{ __('Perfil') }}</label>
                                <div class="col-md-6">
                                    <select id="perfil" class="form-control" name="perfil">
                                        <option value="Administrador">Administrador</option>
                                        <option value="Supervisor">Supervisor</option>
                                        <option value="Usuario">Usuario</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="form-group row">
                                <label for="ativo" class="col-md-4 col-form-label text-md-right">{{ __('Ativo') }}</label>
                                <div class="col-md-6">
                                    <select id="ativo" class="form-control" name="ativo">
                                        <option value="1">Ativo</option>
                                        <option value="0">Inativo</option>
                                    </select>
                                </div>
                            </div>
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
