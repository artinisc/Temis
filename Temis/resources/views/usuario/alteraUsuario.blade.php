@extends('leyoutPrincipal.esqueletoPrincipal')

@section('estilo')
    <link rel="stylesheet" href="{{ URL::asset('css/usuario.css') }}" />
@endsection

@section('content')
    <div>
        <form action="{{ route('/usuario/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <fieldset>
                <div class="form-group @if ($errors->has('curso_id')) has-error @endif">
                    <label class="control-label" for="curso_id">Curso do Aluno</label>
                    <select class="form-control" id="curso_id" name="curso_id">
                        @foreach ($cursos as $id => $curso)
                        <option value="{{ $id }}">{{ $curso }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group @if ($errors->has('name')) has-error @endif">
                    <label class="control-label" for="name">Nome do Aluno</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </fieldset>
        </form>
    </div>
@endsection