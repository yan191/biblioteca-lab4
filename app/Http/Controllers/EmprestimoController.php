<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmprestimoController extends Controller
{
    public function create(){
        return view('emprestimos');
    }

    public function store() {
        
    }
}
