@extends('adminlte::page')

@section('title', 'Biblioteca - Admin')

@section('content_header')
    <h1>Alunos</h1>
@stop

@section('content')
    <div class="nav-tabs-custom mainNav draggable-container">
        <ul class="nav nav-tabs draggable draggable-center">
          <li data-index="0"><a href="#lista" data-toggle="tab"><i class="fa fa-users"></i> Lista</a></li>
          <li data-index="1"><a href="#cadastro" data-toggle="tab"><i class="fa fa-user-plus"></i> Cadastro</a></li>
        </ul>
        <div class="tab-content">

          <div class="tab-pane" id="lista">
              <p>listagem de alunos</p>
          </div>

          <div class="tab-pane" id="cadastro">
              
            <form>

              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" 
                  id="nome" class="form-control" placeholder="Digite o nome do aluno">
                </div>
                <div class="form-group">
                  <label for="curso">Curso</label>
                  <input type="text" 
                  id="curso" class="form-control" placeholder="Digite o nome do curso">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" 
                  id="email" class="form-control" placeholder="Digite o email do aluno">
                </div>
              </div>

            </form>

          </div>

        </div>
      </div>
@stop