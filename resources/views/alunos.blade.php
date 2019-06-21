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

              <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Nome</th>
                      <th>R.A.</th>
                      <th>Curso</th>
                      <th>Email</th>
                      <th>Telefone</th>
                    </tr>
                    <?php 
                    foreach ($alunos as $aluno) {
                    ?>
                    <tr>
                      <td><?php echo $aluno->nome;?></td>
                      <td><?php echo $aluno->ra; ?></td>
                      <td><?php echo $aluno->curso; ?></td>
                      <td><?php echo $aluno->email; ?></td>
                      <td><?php echo $aluno->telefone;; ?></td>
                    </tr>
                  <?php } ?>
                  </table>
          </div>
        </div>




          <div class="tab-pane" id="cadastro">
              
            <form action="/alunos" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" 
                  name="nome"
                  id="nome" class="form-control" placeholder="Digite o nome do aluno">
                </div>
                <div class="form-group">
                  <label for="curso">Curso</label>
                  <input type="text" 
                  name="curso"
                  id="curso" class="form-control" placeholder="Digite o nome do curso">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" 
                  name="email"
                  id="email" class="form-control" placeholder="Digite o email do aluno">
                </div>
                <div class="form-group">
                  <label for="ra">R.A.</label>
                  <input type="number" 
                  name="ra"
                  id="ra" class="form-control" placeholder="Digite o ra do aluno">
                </div>
                <div class="form-group">
                  <label for="telefone">Telefone</label>
                  <input type="tel" 
                  name="telefone"
                  id="telefone" class="form-control" placeholder="Digite o telefone do aluno">
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