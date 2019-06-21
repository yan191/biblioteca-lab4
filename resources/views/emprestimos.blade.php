@extends('adminlte::page')

@section('title', 'Biblioteca - Admin')

@section('content_header')
    <h1>Emprestimos</h1>
@stop

@section('content')
    <div class="nav-tabs-custom mainNav draggable-container">
        <ul class="nav nav-tabs draggable draggable-center">
          <li data-index="0"><a href="#lista" data-toggle="tab"><i class="fa fa-book"></i> Lista</a></li>
          <li data-index="1"><a href="#cadastro" data-toggle="tab"><i class="fa fa-calendar-plus-o"></i> Cadastro</a></li>
        </ul>
        <div class="tab-content">

          <div class="tab-pane" id="lista">
              <p>listagem de emprestimos</p>
          </div>

          <div class="tab-pane" id="cadastro">
              <p>cadastro de emprestimo</p>
          </div>

        </div>
      </div>
@stop