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

Route::view('/', 'home')->name('home');

Route::prefix('disciplinas')->group(function(){
    Route::get('/', 'DisciplinaController@index')->name('disciplina.index');
});

Route::prefix('turmas')->group(function(){
    Route::get('/cadastrar', 'TurmaController@cadastrar')->name('turmas.cadastrar');
});	

Route::prefix('turmas')->group(function(){
    Route::get('/salvar', 'TurmaController@salvar')->name('turmas.salvar');
});	

Route::prefix('turmas')->group(function(){
    Route::get('/listar', 'TurmaController@listar')->name('turmas.listar');
});	


Route::prefix('curso')->group(function(){
    Route::get('/listar', 'CursoController@listar')->name('curso.listar');
});	


Route::prefix('curso')->group(function(){
	Route::get('/remover/{id}','CursoController@remover')->name('curso.remover');
});	

Route::prefix('curso')->group(function(){
	Route::get('/editar/{id}','CursoController@preEditar')->name('edit');
});

Route::prefix('curso')->group(function(){
	Route::post('/editar/save','CursoController@editar')->name('editar');
});