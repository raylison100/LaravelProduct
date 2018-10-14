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

//Route::group(['prefix' => 'painel '], function (){
//
//    Route::get('grupo1', function (){
//        return 'Grupo 1';
//    });
//
//    Route::get('grupo2', function (){
//        return 'Grupo 2';
//    });
//});
//
//Route::get('/categoria2/{idCat?}', function ($idCat=null){
//    return  "ID categoria   {$idCat}";
//});
//
//Route::get('/categoria/{idCat}', function ($idCat){
//    return  "ID categoria   {$idCat}";
//});
//
//Route::get('/empresa', function (){
//    return 'empresa';
//})->name('empresa');

Route::group(['namespace' => 'Sites'], function () {

Route::get('/', 'SiteController@index');
Route::get('/categoria/{idCat}', 'SiteController@categoria');
Route::get('/categoria2/{idCat?}', 'SiteController@categoria2');

});

Route::resource('/painel/produtos', 'Painel\ProductController');
