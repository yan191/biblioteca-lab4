<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function create(){
        $livros = Livro::all();

        return view('livros', ['livros'=>$livros]);
    }

    public function store(){
        $livro = new Livro;

        $livro->nome = request('nome');
        $livro->paginas = request('paginas');
        $livro->genero = request('genero');
        $livro->autor = request('autor');
        $livro->quantidade = request('quantidade');
        $livro->editora = request('editora');

        $livro -> save();

        $livros = Livro::all();
        return view('livros', ['livros'=>$livros]);
    }
}
