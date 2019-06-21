<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function create(){
        $alunos = Aluno::all();

        return view('alunos', ['alunos'=>$alunos]);
    }

    public function store(){
        $aluno = new Aluno;

        $aluno->nome = request('nome');
        $aluno->ra = request('ra');
        $aluno->curso = request('curso');
        $aluno->email = request('email');
        $aluno->telefone = request('telefone');
        $aluno->save();

        $alunos = Aluno::all();

        return view('alunos', ['alunos'=>$alunos]);
    }
}
