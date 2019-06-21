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

Route::view('/', 'index');

Route::get('livros', 'LivroController@create')->name('livro.create');
Route::post('livros', 'LivroController@store')->name('livro.store');

Route::get('alunos', 'AlunoController@create')->name('aluno.create');
Route::post('alunos', 'AlunoController@store')->name('aluno.store');

Route::get('emprestimos', 'EmprestimoController@create')->name('emprestimo.create');
Route::post('emprestimos', 'EmprestimoController@store')->name('emprestimo.store');

?>