<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" />
        <title>Temis</title>
    </head>
    <body>
        <div class="tela-direita">
        </div>
        <div class="container">

            <div class="msg-topo"><p id="msg-topo">{{ __('Login') }}</p></div>

            <div class="area-login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="nome-campos">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="password" class="nome-campos">{{ __('Senha') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="nome-campos" for="remember">
                                    {{ __('Lembrar') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn-login">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>   
    </body>
</html>
