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

Route::get('/', function () {
    return view('welcome');
});


//Route::group(['prefix' => 'api'], function()
//{
//    Route::group(['prefix' => 'carros'], function() 
//    {
//        Route::get('', function(){
//            return "Exibe todos os carros cadastrados.";
//        });
//        Route::get('{id}', function($id){
//            return "Retorna os dados do carro de ID {$id}";
//        });
//        Route::post('', function(){
//            return "Cadastra um novo carro";
//        });
//        Route::put('{id}', function($id){
//            return "Altera os dados do carro de ID {$id}";
//        });
//        Route::delete('{id}', function($id){
//            return "Deleta o carro de ID {$id}";
//        });
//    });
//});