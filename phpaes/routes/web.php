<?php
use App\Http\Controllers\ReceitaController;
use App\Http\Controllers\ProdutoController;

Auth::routes();

Route::get('/', 'PrincipalController@inicio');

Route::get('/logout', 'PrincipalController@logout');

Route::get('/home', 'PrincipalController@index')->name('home');
Route::get('/admin', 'PrincipalController@admin');
Route::get('/minha-conta/{idUsuarioFK}', 'PrincipalController@minhaConta');
Route::get('/admin/painel', 'PrincipalController@painel');
Route::get('/admin/cadastrardesconto', 'CupomDescontoController@cadastroDesconto');
Route::post('/cadastrodesconto/adiciona', 'CupomDescontoController@adiciona');
Route::get('/listarcupomdesconto', 'CupomDescontoController@listarCupomDesconto');
Route::get('/cadastrodesconto/deletar/{idCupomDesconto}', 'CupomDescontoController@deletar');
Route::get('/admin/editarcupomdesconto/{idCupomDesconto}/editar', 'CupomDescontoController@editar');
Route::any('/admin/editarcupomdesconto/update/{idCupomDesconto}', 'CupomDescontoController@update');


Route::get('/admin/cadastrarproduto', 'ProdutoController@cadastroProduto');
Route::post('cadastrarproduto/adiciona', 'ProdutoController@adiciona');
Route::get('cadastroproduto/deletar/{idProduto}', 'ProdutoController@deletar');
Route::get('/listarproduto', 'ProdutoController@listarProduto');
Route::get('/produto/{idCategoria}', 'ProdutoController@listarProdutos');
Route::get('/produto/detalhes/{idProduto}', 'ProdutoController@detalhesProdutos');
Route::get('/admin/editarproduto/{idProduto}/editar', 'ProdutoController@editar');
Route::any('/admin/editarproduto/update/{idProduto}', 'ProdutoController@update');

Route::get('/admin/cadastrarcategoria', 'CategoriaController@cadastroCategoria');
Route::post('/cadastrarcategoria/adiciona', 'CategoriaController@adiciona');
Route::get('cadastrocategoria/deletar/{idCategoria}', 'CategoriaController@deletar');
Route::get('/listarcategoria', 'CategoriaController@listarCategoria');
Route::get('/admin/editarcategoria/{idCategoria}/editar', 'CategoriaController@editar');
Route::any('/admin/editarcategoria/update/{idCategoria}', 'CategoriaController@update');

Route::get('/admin/cadastrarreceita', 'ReceitaController@cadastroReceita');
Route::post('/cadastrarreceita/adiciona', 'ReceitaController@adiciona');
Route::post('/cadastrarendereco', 'PrincipalController@novoEndereco');
Route::get('cadastroreceita/deletar/{idReceita}', 'ReceitaController@deletar');
Route::get('/listarreceita', 'ReceitaController@listarReceita');
Route::get('/receitas', 'ReceitaController@receitas');
Route::get('/admin/editarreceita/{idReceita}/editar', 'ReceitaController@editar');
Route::any('/admin/editarreceita/update/{idReceita}', 'ReceitaController@update');

Route::get('/contato', 'PrincipalController@mostrarContato');
Route::get('/quem-somos', 'PrincipalController@quemSomos');
Route::get('/carrinho', 'PrincipalController@carrinho');
Route::post('/adicionar-carrinho/{idProduto}', 'ProdutoController@adicionarCarrinho');
Route::get('/editarusuario/{id}', 'PrincipalController@update');