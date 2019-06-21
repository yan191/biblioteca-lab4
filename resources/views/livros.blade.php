@extends('adminlte::page')

@section('title', 'Biblioteca - Admin')

@section('content_header')
    <h1>Livros</h1>
@stop

@section('content')
    <div class="nav-tabs-custom mainNav draggable-container">
        <ul class="nav nav-tabs draggable draggable-center">
          <li data-index="0"><a href="#lista" data-toggle="tab"><i class="fa fa-book"></i> Lista</a></li>
          <li data-index="1"><a href="#cadastro" data-toggle="tab"><i class="fa fa-plus-square"></i> Cadastro</a></li>
        </ul>
        <div class="tab-content">

          <div class="tab-pane" id="lista">
              <p>listagem de livros</p>
          </div>

          <div class="tab-pane" id="cadastro">
              
            <form>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control"
                        id="nome" placeholder="Digite o nome do livro">
                    </div>
                    <div class="form-group">
                        <label for="paginas">Numero de paginas</label>
                        <input type="number" class="form-control"
                            id="paginas" placeholder="Digite o numero de paginas">
                    </div>
                    <div class="form-group">
                        <label>Genero</label>
                        <select class="form-control">
                            <option value="romance">Romance</option>
                            <option value="aventura">aventura</option>
                            <option value="ficção">Ficção</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input type="text" class="form-control"
                            id="autor" placeholder="Digite o nome do autor">
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" class="form-control"
                                id="quantidade" placeholder="Digite a quantidade de livros">
                    </div>
                    <div class="form-group">
                        <label for="editora">Editora</label>
                        <input type="text" class="form-control"
                            id="editora" placeholder="Digite o nome da editora">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">cadastrar</button>
                </div>
            </form>

          </div>

        </div>
      </div>
@stop