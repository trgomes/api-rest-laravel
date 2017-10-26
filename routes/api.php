<?php

use Illuminate\Http\Request;


//Route::group(['prefix' => 'carros'], function() 
//{
//    Route::get('', function() {
//        return "Exibe todos os carros cadastrados.";
//    });
//    Route::get('{id}', function($id) {
//        return "Retorna os dados do carro de ID {$id}";
//    });
//    Route::post('', function() {
//        return "Cadastra um novo carro";
//    });
//    Route::put('{id}', function($id) {
//        return "Altera os dados do carro de ID {$id}";
//    });
//    Route::delete('{id}', function($id) {
//        return "Deleta o carro de ID {$id}";
//    });
//});


Route::resource('users', 'UserController');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


