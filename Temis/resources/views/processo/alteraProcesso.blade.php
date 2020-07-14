@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/alteraProcesso.css') }}" />
@endsection

@section('content')
    <div class="tela-processo">
        <form method="POST" action="{{ route('processo.update', $processo) }}">
            @method('PUT')
            {{ csrf_field() }}
            <fieldset>
                <table class="campos-processo">
                    <thead>
                        <tr>
                            <td><p id="msg-topo">DADOS PROCESSO</p></td>
                        </tr>    
                    </thead>
                    <tbody>
                        <tr class="linhas-processo">
                            <td>
                                <br>
                                <label for="codigo">Codigo</label>
                                <br>
                                <input name="codigo" type="text" maxlength="7" value="{{ old("codigo", $processo->codigo) }}">  
                            </td>
                            <td>
                                <br>
                                <label for="idjuizo">ID Juizo</label>
                                <br>
                                <input name="idjuizo" type="text"  maxlength="6" value="{{ old("idjuizo", $processo->idjuizo) }}">  
                            </td>
                            <td>
                                <br>
                                <label for="cnj">CNJ</label>
                                <br>
                                <input name="cnj" type="text"  maxlength="20" value="{{ old("cnj", $processo->cnj) }}">  
                            </td>
                            <td>
                                <br>
                                <label for="ncontrato">Numero Contrato</label>
                                <br>
                                <input name="ncontrato" type="text"  maxlength="20" value="{{ old("ncontrato", $processo->ncontrato) }}">  
                            </td>
                        </tr>    
                        <tr class="linhas-processo">
                            <td>
                                <label for="tipo">Tipo</label>
                                <br>
                                <input name="tipo" type="text" value="{{ old("tipo", $processo->tipo) }}">  
                            </td>
                            <td colspan="2">
                                <label for="andamento">Andamento</label>
                                <br>
                                <input name="andamento" type="text" style="width: 320px" value="{{ old("andamento", $processo->andamento) }}">  
                            </td>
                        </tr>   
                        <tr class="linhas-processo"> 
                            <td>
                                <label for="comarca">Comarca</label>
                                <br>
                                <input name="comarca" type="text" value="{{ old("comarca", $processo->comarca) }}">  
                            </td>
                            <td>
                                <label for="bem">Bem</label>
                                <br>
                                <input name="bem" type="text" value="{{ old("bem", $processo->bem) }}">  
                            </td>
                            <td>
                                <label for="valor">Valor</label>
                                <br>
                                <input name="valor" type="text" maxlength="9" value="{{ old("valor", $processo->valor) }}">  
                            </td>
                        </tr> 
                        <tr class="linhas-processo">   
                            <td>
                                <label for="contratante">Contratante</label>
                                <br>
                                <select name="contratante"><option selected>{{ old("contratante", $processo->contratante) }}</option>
                                    <option value="Ativo">BB</option>
                                    <option value="Suspenso">Santander</option>
                                </select>  
                            </td>
                            <td>
                                <label for="carteira">Carteira</label>
                                <br>
                                <select name="carteira"><option selected>{{ old("carteira", $processo->carteira) }}</option>
                                    <option value="Leves">Leves</option>
                                    <option value="RCI">RCI</option>
                                    <option value="Imoveis">Imoveis</option>
                                    <option value="Emprestimos">Emprestimos</option>
                                </select>  
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
                                <input name="nomeautor" type="text" value="{{ old("nomeautor", $processo->nomeautor) }}">  
                            </td>
                            <td>
                                <label for="docautor">CPF/CNPJ Autor</label>
                                <br>
                                <input name="docautor" type="text"  maxlength="11" value="{{ old("docautor", $processo->docautor) }}">  
                            </div>
                        </td>
                        <tr class="linhas-processo">
                            <td>
                                <label for="nomereu">Nome Réu</label>
                                <br>
                                <input name="nomereu" type="text" value="{{ old("nomereu", $processo->nomereu) }}">  
                            </td>
                            <td>
                                <label for="docreu">CPF/CNPJ Réu</label>
                                <br>
                                <input name="docreu" type="text"  maxlength="11" value="{{ old("docreu", $processo->docreu) }}">  
                            </td>
                            <td>
                                <label for="telefonereu">Telefone Réu</label>
                                <br>
                                <input name="telefonereu" type="text"  maxlength="11" value="{{ old("telefonereu", $processo->telefonereu) }}">  
                            </td>
                        </tr>
                        <tr class="linhas-processo">
                            <td colspan="2">
                                <label for="endreu">Endereço Réu</label>
                                <br>
                                <input name="endreu" type="text" style="width: 320px" value="{{ old("endreu", $processo->endreu) }}">  
                            </td>
                            <td>
                                <label for="cidadereu">Cidade Réu</label>
                                <br>
                                <input name="cidadereu" type="text" value="{{ old("cidadereu", $processo->cidadereu) }}">  
                            </td>
                            <td>
                                <label for="cepreu">CEP Réu</label>
                                <br>
                                <input name="cepreu" type="text"  maxlength="8" value="{{ old("cepreu", $processo->cepreu) }}">  
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
                                <textarea name="descricao" rows="4" >{!! nl2br(old("descricao", $processo->descricao)) !!}</textarea> 
                            </td>
                            <td>
                                <label for="status">Status</label>
                                <br>
                                <select name="status"><option selected>{{ old("status", $processo->status) }}</option>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Suspenso">Suspenso</option>
                                    <option value="Morto">Morto</option>
                                </select>
                                <br>
                                <br> 
                                <button type="submit">Salvar</button>
                            </td>
                        </tr>
                    </tbody>        
                </table>  
            </fieldset>
        </form>
    </div>
@endsection