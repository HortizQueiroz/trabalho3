<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importar a classe simples de acesso ao BD
use Illuminate\Support\Facades\DB;

//importar o modelo Produto
use App\Produto;

//importar o modelo categoria
use App\Categoria;

//Importando a classe de Validação
use App\Http\Requests\RequestProduto;

class ControllerProduto extends Controller
{
   //
    /**
     * Retorna todos os produtos cadastrados
     */
    public function produtos()
    {

        $dados = Produto::all();

        return view('produtos')->with('produtos', $dados);
    }

    /**
     * Chama a view com o formulario de adicionar
     *
     */
    public function formAdicionar()
    {
        $categorias = Categoria::all();

        return view('form-adicionar')->with('categorias', $categorias);
    }

    /**
     * Método que vai adicionar um produto no BD
     */
    public function adicionar(RequestProduto $request)
    {

        Produto::create($request->input());

        return redirect()->action('ControllerProduto@produtos');

    }

    public function excluir($id)
    {
        //Excluir via eloquent quando tem o id
        Produto::destroy($id);



        return redirect()->action('ControllerProduto@produtos');
    }

    public function form_editar($id)
    {
        
        $produto = Produto::find($id);

        $categorias = Categoria::all();

        //chamando a view e passando o dado do produto
        return view('form-editar')->with('produto', $produto)
        ->with('categorias', $categorias);

    }

    public function editar(RequestProduto $request)
    {

        Produto::find($request->id)->update($request->input());

        return redirect()->action('ControllerProduto@produtos');
    }

}
