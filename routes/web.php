<?php

/*
 * A clase Route contem varios metodos que representam as requisiçoes http feitas ao servidor. 
 * esses metodos possuem dois parametros principais. O primeiro parametro representa a url da requisiçao feita. 
 * O segundo parametro é a funçao a ser executada para atender a requisiçao 
 */


// aqui estao cadstradas todas as rotas da logica de autenticaçao
Auth::routes();

// ao acessar o link "/", executar a funçao a seguir
Route::get('/', function() {
    return "<h1>sejam bem vindos!</h1><a href='/exemplo'>Ir pra outra página</a>";
});

// ao acessar o link "/exemplo", executar a funçao a seguir
Route::get('/exemplo', function() {
    return "<h1>Outra página</h1><a href='/exemplo/dentro'>Continuar navegando</a>";
});

// ao acessar o link "/exemplo/dentro", executar a funçao a seguir
Route::get('/exemplo/dentro', function() {
    return "<h1>Mais uma página</h1><a href='/'>Ir para página inicial</a>";
});

// ao acessar o link "/lp", executar a funçao a seguir
Route::get('/lp', function() {
    // a funçao view retorna uma pagina com o mesmo nome que foi passado como parametro
    // as paginas no laravel ficam dentro da pasta resources/views
    return view("disciplina1");
});

Route::get('/dw', function() {
    return view("disciplina2");
});

// ao acessar o link "/home", executar a funçao index da classe HomeController
Route::get('/home', 'HomeController@index')->name('home');

// ao acessar o link "/f", executar a funçao minhafuncao da classe TesteController
Route::get('/f', 'TesteController@minhafuncao');

//o usuário consegue enviar um valor através de uma url (registrado entre chaves simples aqui no arquivo de rotas)
// A variavel var é passada como parametro para a funçao teste
Route::get('/teste/{var}', 'TesteController@teste');

Route::get('/teste2/{idade}', 'TesteController@permissao');

Route::get('/teste', function() {
    //no PHP, o ponto concatena strings
    return "Você tem mais que 18 anos? "
            . " <a href='/teste2/20'>Sim</a> "
            . " <a href='/teste2/15'>Não</a> ";
});

Route::get('/filho1', function() {
    return view('child1');
});

Route::get('/filho2', function() {
//    $msg = 'este é um texto qualquer que foi passado para a view';
//    return view('child2', compact('msg'));
    return view('child2', ['msg' => 'este é um texto qualquer que foi passado para a view']);
});

Route::get('/filho3', 'TesteController@funcao1');


Route::get('/req1/{param1}/{param2}', 'TesteController@funcaoGet');

Route::post('/req2', 'TesteController@funcaoPost');

Route::get('/requisicao', function() {
    return view('requisicao');
});

////exibe todos os produtos do banco
//Route::get('/produtos', 'ProdutoController@index');
//
////abre o formulario pra criar um produto
//Route::get('/produtos/create', function() {
//    //abre a view 'create' que está dentro
//    //da pasta 'produtos'
//    return view("produtos.create");
//});
//
////cria um novo produto no banco
//Route::post('/produtos', 'ProdutoController@store');
//
////deleta um produto específico do banco
//Route::delete('/produtos/{produto}', 'ProdutoController@destroy');
//
////exibe um formulario para editar um produto específico
//Route::get('/produtos/{produto}/edit', 'ProdutoController@edit');
//
////altera as informacoes de um produto específico
//Route::put('/produtos/{produto}', 'ProdutoController@update');
//
////exibe um produto específico
//Route::get('/produtos/{produto}', 'ProdutoController@show');
