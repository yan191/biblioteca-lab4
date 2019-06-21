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
              <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                      <tr>
                        <th>Nome</th>
                        <th>Paginas</th>
                        <th>Genero</th>
                        <th>Autor</th>
                        <th>Quantidade</th>
                        <th>Editora</th>
                      </tr>
                      <?php 
                      foreach ($livros as $livro) {
                      ?>
                      <tr>
                        <td><?php echo $livro->nome;?></td>
                        <td><?php echo $livro->paginas; ?></td>
                        <td><?php echo $livro->genero; ?></td>
                        <td><?php echo $livro->autor; ?></td>
                        <td><?php echo $livro->quantidade; ?></td>
                        <td><?php echo $livro->editora; ?></td>
                      </tr>
                    <?php } ?>
                    </table>
                </div>
          </div>

          <div class="tab-pane" id="cadastro">
              
            <form action="/livros" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control"
                        name="nome"
                        id="nome" placeholder="Digite o nome do livro">
                    </div>
                    <div class="form-group">
                        <label for="paginas">Numero de paginas</label>
                        <input type="number" class="form-control"
                            name="paginas"
                            id="paginas" placeholder="Digite o numero de paginas">
                    </div>
                    <div class="form-group">
                        <label>Genero</label>
                        <select class="form-control" name="genero">
                            <option value="romance">Romance</option>
                            <option value="aventura">aventura</option>
                            <option value="ficção">Ficção</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input type="text" class="form-control"
                            name="autor"
                            id="autor" placeholder="Digite o nome do autor">
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" class="form-control"
                                name="quantidade"
                                id="quantidade" placeholder="Digite a quantidade de livros">
                    </div>
                    <div class="form-group">
                        <label for="editora">Editora</label>
                        <input type="text" class="form-control"
                            name="editora"
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