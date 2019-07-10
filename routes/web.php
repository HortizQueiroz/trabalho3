<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ControllerProduto@produtos');

//Chamando o controllador
Route::get('/sobre', 'ControllerPagina@sobre');
//Route::get('/contato', 'ControllerPagina@contato');

//Rotas para parte de Produtos
Route::get('/produtos', 'ControllerProduto@produtos');
Route::get('/produtos/form-adicionar', 'ControllerProduto@formAdicionar');
Route::post('/produtos/adicionar', 'ControllerProduto@adicionar');
Route::get('/produtos/excluir/{id}', 'ControllerProduto@excluir');
Route::get('/produtos/editar/{id}', 'ControllerProduto@form_editar');
Route::post('/produtos/editar', 'ControllerProduto@editar');

//Rotas para parte de CATEGORIA
Route::get('/categorias', 'ControllerCategoria@categorias');
Route::get('/categorias/form-adicionar', 'ControllerCategoria@formAdicionar');
Route::post('/categorias/adicionar', 'ControllerCategoria@adicionar');
Route::get('/categorias/excluir/{id}', 'ControllerCategoria@excluir');
Route::get('/categorias/editar/{id}', 'ControllerCategoria@form_editar');
Route::post('/categorias/editar', 'ControllerCategoria@editar');

