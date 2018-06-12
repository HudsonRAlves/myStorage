<?php

/*
|--------------------------------------------------------------------------
| INICIO APP
|--------------------------------------------------------------------------
*/
Route::resource('/','painel\anunciosIndexController');



/*
|--------------------------------------------------------------------------
| GRUPO ANUNCIOS
|--------------------------------------------------------------------------
*/
Route::resource('/painel/anuncios','painel\anunciosController');

/*
|--------------------------------------------------------------------------
| Route Login
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/anuncio/{id}/update','HomeController@update');

/*
|--------------------------------------------------------------------------
| GRUPO USUARIOS
|--------------------------------------------------------------------------
*/
Route::group(['prefix'=>'painel/usuarios', ], function (){
       Route::get('/', function () {
        return 'lista';
    });    
});

/*
|--------------------------------------------------------------------------
| ROTA DE TESTE - VERIFICAR PERMISSOES, FUNCOES DOS USUARIOS
|--------------------------------------------------------------------------
*/
/*Route::get('/roles-permissions/','HomeController@rolesPermissions');*/

Route::get('/teste', function(){
    return view('teste');
});


/*
|--------------------------------------------------------------------------
| ROTA DE TESTE - VERIFICAR PERMISSOES, FUNCOES DOS USUARIOS
|--------------------------------------------------------------------------
*/
Route::group(array('prefix' => 'api'), function()
{
  Route::get('/', function () {
      return response()->json(['message' => 'myStorage', 'status' 
                                         => 'Connected']);;
  });

//  Route::resource('usuarios', 'Usuarios\UsuariosController');
//  Route::get('usuariosgeral/{id}', 'Usuarios\UsuariosController@nm_teste');
    Route::get('anuncios', 'apiAnunciosController@index');
//  Route::get('anunciosgeral/{id}', 'Anuncios\AnunciosController@anunciosporendereco');

});
