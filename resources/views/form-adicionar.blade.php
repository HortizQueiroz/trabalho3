@extends('principal')

@section('conteudo-principal')

<h2 align="center"><b>Adicionar Produtos</b></h2> <br/>

<form method="post" action="{{url('/produtos/adicionar')}}">

    @csrf

    <div class="form-group">
        <label for="titulo">Produto</label>
        <input value="{{old('titulo')}}" id="titulo" class="form-control" name="titulo" type="text">

        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="categoria">Categoria</label>
        <select id="categoria" class="form-control" name="categoria_id">
            <option value="">Selecione</option>

            @foreach ($categorias as $categoria)

                <option value="{{$categoria->id}}"> {{$categoria->nome}} </option>

            @endforeach
        </select>

        @error('categoria_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="texto">Descrição</label>
        <textarea id="texto" class="form-control" rows="3" name="texto">{{old('texto')}}</textarea>

        @error('texto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button> &nbsp
    <input class="btn btn-primary" type="button" value="Cancelar" onClick="history.go(-1)">

</form>
    
@endsection
