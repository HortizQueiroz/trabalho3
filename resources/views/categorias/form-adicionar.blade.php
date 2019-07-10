@extends('principal')

@section('conteudo-principal')

<h1 align="center"><b>Adicionar Categoria</b></h1><br/>

<form method="post" action="{{url('/categorias/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Nome</label>
        <input value="{{old('nome')}}" id="nome" class="form-control" name="nome" type="text">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>&nbsp
    <input class="btn btn-primary" type="button" value="Cancelar" onClick="history.go(-1)">

</form>

@endsection
