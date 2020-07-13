<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="{{ URL::asset('css/esqueleto.css') }}" />
        @yield('estilo')
        <title>Temis</title>
    </head>
    <body>
        <header class="topo">
            <div id="logo-topo"></div>
            <div class="inf-topo">
                <table class="tb-topo">
                    <tr>
                        <td>{{ Auth::guard()->user()->name }}</td>
                        <td>{{ Auth::guard()->user()->email}}</td>
                    </tr>
                    <tr>
                        <td>{{ Auth::guard()->user()->departamento}}</td>
                        <td>{{ date('d-m-Y H:i:s') }}</td>
                    </tr>
                </table>
            </div>
        </header>
        <hr />
        <div class="centro">
            <div class="lateral-menus">
                <li class="item">
                    <a href="{{ url('/home') }}" class="btn">Inicio</a>
                </li>
                <li class="item" id='processos'>
                    <a href="#processos" class="btn">Processos</a>
                    <div class="smenu">
                        <a href="{{ url('/processo/create') }}" class="btn">Novo Processo</a>
                        <a href="{{ url('/tProcesso') }}" class="btn">Buscar Processo</a>
                    </div>
                </li>
                <li class="item" id='usuarios'>
                    <a href="#usuarios" class="btn">Usuarios</a>
                    <div class="smenu">
                        <a href="{{ url('/register') }}" class="btn">Novo Usuario</a>
                        <a href="{{ url('/tUsuario') }}" class="btn">Buscar Usuario</a>
                    </div>
                </li>
                <li class="item">
                    <a href="{{ url('/logout') }}" class="btn">Sair</a>
                </li>
            </div>
            <main class="conteudo">
                @yield('content')
            </main>
        </div>
        <hr />    
        <footer class="base">
            <div class="inf-base">
                <table class="dados-dev">
                    <tr>
                        <td>Artini Scarabelot - Guilherme Urbano - Guilherme Vieira Matias</td>
                        <td>artinisc@hotmail.com</td>
                        <td>(48) 99956-9397</td>
                    </tr>
                </table> 
            </div>
        </footer>
    </body>
</html>