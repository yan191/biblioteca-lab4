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

Route::get('/', function(){
    return view('index');
});

Route::get('/livros', function(){
    return view('livros');
});

Route::get('/alunos', function(){
    return view('alunos');
});

Route::get('/emprestimos', function(){
    return view('emprestimos');
});

?>