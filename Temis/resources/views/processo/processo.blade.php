@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/processo.css') }}" />
@endsection

@section('content')
    <div class="tela-processo">
        <fieldset>
            <table class="campos-processo">
                <thead>
                    <tr>
                        <td><h9 id="msg-topo">DADOS PROCESSO</h9></td>
                    </tr>    
                </thead>
                <tbody>
                    <tr class="linhas-processo">
                        <td>
                            <br>
                            <label for="codigo">Codigo</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->codigo }}</p>  
                        </td>
                        <td>
                            <br>
                            <label for="idjuizo">ID Juizo</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->idjuizo }}</p>  
                        </td>
                        <td>
                            <br>
                            <label for="cnj">CNJ</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->cnj }}</p>  
                        </td>
                        <td>
                            <br>
                            <label for="ncontrato">Numero Contrato</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->ncontrato }}</p>  
                        </td>
                    </tr>    
                    <tr class="linhas-processo">
                        <td>
                            <label for="contratante">Contratante</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->contratante }}</p> 
                        </td>
                        <td>
                            <label for="tipo">Tipo</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->tipo }}</p>  
                        </td>
                        <td colspan="2">
                            <label for="andamento">Andamento</label>
                            <br>
                            <p class="paragrafo-dados" style="width: 320px">{{ $processo->andamento }}</p>  
                        </td>
                    </tr>   
                    <tr class="linhas-processo"> 
                        <td>
                            <label for="carteira">Carteira</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->carteira }}</p> 
                        </td>
                        <td>
                            <label for="comarca">Comarca</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->comarca }}</p> 
                        </td>
                        <td>
                            <label for="bem">Bem</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->bem }}</p>  
                        </td>
                        <td>
                            <label for="valor">Valor</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->valor }}</p>  
                        </td>
                    </tr>   
                </tbody>  
            </table>
            <hr />
            <table class="campos-processo">          
                <tbody>        
                    <tr class="linhas-processo"> 
                        <td>
                            <label for="nomeautor">Nome Autor</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->nomeautor }}</p> 
                        </td>
                        <td>
                            <label for="docautor">CPF/CNPJ Autor</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->docautor }}</p> 
                        </div>
                    </td>
                    <tr class="linhas-processo">
                        <td>
                            <label for="nomereu">Nome Réu</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->nomereu }}</p> 
                        </td>
                        <td>
                            <label for="docreu">CPF/CNPJ Réu</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->docreu }}</p> 
                        </td>
                        <td>
                            <label for="telefonereu">Telefone Réu</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->telefonereu }}</p> 
                        </td>
                    </tr>
                    <tr class="linhas-processo">
                        <td colspan="2">
                            <label for="endreu">Endereço Réu</label>
                            <br>
                            <p class="paragrafo-dados" style="width: 320px">{{ $processo->endreu }}</p> 
                        </td>
                        <td>
                            <label for="cidadereu">Cidade Réu</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->cidadereu }}</p>  
                        </td>
                        <td>
                            <label for="cepreu">CEP Réu</label>
                            <br>
                            <p class="paragrafo-dados">{{ $processo->cepreu }}</p> 
                        </td>
                    </tr>
                </tbody>        
            </table>
            <hr />
            <table class="campos-processo">          
                <tbody>
                    <tr class="linhas-processo">
                        <td>
                            <label for="descricao">Descricao</label>
                            <br>
                            <p class="paragrafo-dados" style="width: 660px; height: 50px; margin-bottom: 0px;">{!! nl2br($processo->descricao) !!}</p>
                        </td>
                        <td>
                            <label for="status">Status</label>
                            <br>
                            <p class="paragrafo-dados" >{{ $processo->status }}</p>
                            <button><a href="{{ route('processo.edit', $processo) }}">Editar</a></button>
                        </td>
                    </tr>
                </tbody>        
            </table>  
        </fieldset>
    </div>
@endsection