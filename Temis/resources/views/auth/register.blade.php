@extends('leyoutPrincipal.esqueletoPrincipal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
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

                        <div class="form-group row">
                            <label for="ativo" class="col-md-4 col-form-label text-md-right">{{ __('Ativo') }}</label>
                            <div class="col-md-6">
                                <select id="ativo" class="form-control" name="ativo">
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
