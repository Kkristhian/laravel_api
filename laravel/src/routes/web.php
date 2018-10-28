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
    return view('inicial');
});

Route::get('/inicial', 'RegiaoController@loadInicial');

Route::get('/inicial/ConsultaRegiao', 'RegiaoController@loadConsultaRegiao');
Route::get('/inicial/CadastroRegiao', 'RegiaoController@loadCadastraRegiao');
Route::get('/inicial/ConsultaOrdem', 'Ordens_detalhesController@loadConsultaOrdem');
Route::get('/inicial/CadastroOrdem', 'Ordens_detalhesController@loadCadastraOrdem');