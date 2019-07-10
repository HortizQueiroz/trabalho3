
@extends('principal')

@section('conteudo-principal')
{{-- Vai pegar o conteudo que estiver dentro da
    section e jogar dentro do yield
--}}
<h1 align="center"><b>Produtos</b></h1> <br/>

<a href="{{url('/produtos/form-adicionar')}}" class="btn btn-primary float-right mb-2">
    Adicionar</a>

<table class="table table-dark">
    <tr>
        <th>Id</th>
        <th>Produto</th>
        <th>Categoria</th>
        <th>Descrição</th>
        <th>Data</th>
        <th>Opções</th>
    </tr>
    @forelse ($produtos as $produto)
        <tr>
            <td> {{$produto->id}} </td>
            <td> {{$produto->titulo}} </td>
            <td> {{$produto->categoria->nome}} </td>
            <td> {{$produto->texto}} </td>
            <td> {{$produto->created_at}} </td>
            <td>
                <a class="btn btn-outline-secondary" href="{{url('/produtos/editar/' . $produto->id)}}">
                    Editar
                </a>
                <a class="btn btn-outline-secondary" href="{{url('/produtos/excluir/' . $produto->id)}}">
                    Excluir
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">Sem produtos cadastrados.</td>
        </tr>
    @endforelse
</table>
@endsection
