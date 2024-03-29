<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',['as'=>'site.home', function () {
    return view('site.home');
}]);


Route::post('/contato/enviar',['as'=>'site.contato.enviar', 'uses'=>'Site\PaginaController@enviarContato']);

Route::get('/contato',['as'=>'site.contato', 'uses'=>'Site\PaginaController@contato']);

Route::get('/sobre',['as'=>'site.sobre', 'uses'=>'Site\PaginaController@sobre']);


//Route::get('/contato',['as'=>'site.contato', function () {
//    return view('site.contato');
//}]);

Route::get('/imovel/{id}/{titulo?}',['as'=>'site.imovel', function () {
    return view('site.imovel');
}]);

Route::get('/admin/login',['as'=>'admin.login',function(){
	return view('admin.login.index'); 
}]);


Route::post('/admin/login',['as'=>'admin.login','uses'=>'Admin\UsuarioController@login']);

Route::group(['middleware'=>'auth'],function(){

        Route::get('/admin/login/sair',['as'=>'admin.login.sair','uses'=>'Admin\UsuarioController@sair']);

        Route::get('/admin/usuarios',['as'=>'admin.usuarios','uses'=>'Admin\UsuarioController@index']);

        Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar','uses'=>'Admin\UsuarioController@adicionar']);

        Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar','uses'=>'Admin\UsuarioController@editar']);

        Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar','uses'=>'Admin\UsuarioController@salvar']);

        Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar','uses'=>'Admin\UsuarioController@atualizar']);

        Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar','uses'=>'Admin\UsuarioController@deletar']);

        Route::get('/admin',['as'=>'admin.principal',function(){
            return view('admin.principal.index');
        }]);

        Route::get('/admin/paginas',['as'=>'admin.paginas','uses'=>'Admin\PaginaController@index']);

        Route::get('/admin/paginas/editar/{id}',['as'=>'admin.paginas.editar','uses'=>'Admin\PaginaController@editar']);

        Route::put('/admin/paginas/atualizar/{id}',['as'=>'admin.paginas.atualizar','uses'=>'Admin\PaginaController@atualizar']);



        Route::get('/admin/tipos',['as'=>'admin.tipos','uses'=>'Admin\TipoController@index']);

        Route::get('/admin/tipos/adicionar',['as'=>'admin.tipos.adicionar','uses'=>'Admin\TipoController@adicionar']);

        Route::get('/admin/tipos/editar/{id}',['as'=>'admin.tipos.editar','uses'=>'Admin\TipoController@editar']);


        Route::post('/admin/tipos/salvar',['as'=>'admin.tipos.salvar','uses'=>'Admin\TipoController@salvar']);

        Route::put('/admin/tipos/atualizar/{id}',['as'=>'admin.tipos.atualizar','uses'=>'Admin\TipoController@atualizar']);

        Route::get('/admin/tipos/deletar/{id}',['as'=>'admin.tipos.deletar','uses'=>'Admin\TipoController@deletar']);


        Route::get('/admin/cidades',['as'=>'admin.cidades','uses'=>'Admin\CidadeController@index']);

        Route::get('/admin/cidades/adicionar',['as'=>'admin.cidades.adicionar','uses'=>'Admin\CidadeController@adicionar']);

        Route::get('/admin/cidades/editar/{id}',['as'=>'admin.cidades.editar','uses'=>'Admin\CidadeController@editar']);

        Route::post('/admin/cidades/salvar',['as'=>'admin.cidades.salvar','uses'=>'Admin\CidadeController@salvar']);

        Route::put('/admin/cidades/atualizar/{id}',['as'=>'admin.cidades.atualizar','uses'=>'Admin\CidadeController@atualizar']);

        Route::get('/admin/cidades/deletar/{id}',['as'=>'admin.cidades.deletar','uses'=>'Admin\CidadeController@deletar']);




        Route::get('/admin/imoveis',['as'=>'admin.imoveis','uses'=>'Admin\ImovelController@index']);

        Route::get('/admin/imoveis/adicionar',['as'=>'admin.imoveis.adicionar','uses'=>'Admin\ImovelController@adicionar']);

        Route::get('/admin/imoveis/editar/{id}',['as'=>'admin.imoveis.editar','uses'=>'Admin\ImovelController@editar']);

        Route::post('/admin/imoveis/salvar',['as'=>'admin.imoveis.salvar','uses'=>'Admin\ImovelController@salvar']);

        Route::put('/admin/imoveis/atualizar/{id}',['as'=>'admin.imoveis.atualizar','uses'=>'Admin\ImovelController@atualizar']);

        Route::get('/admin/imoveis/deletar/{id}',['as'=>'admin.imoveis.deletar','uses'=>'Admin\ImovelController@deletar']);



});

//Route::auth(); retirando para nao usar rotas automaticas

