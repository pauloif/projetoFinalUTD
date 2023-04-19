<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Titulo</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"> Relatório </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Tabela de resultados -->
    <div class="card">
      <div class="card-header bg-gradient-secondary">
        <h3 class="card-title">
          Lista de Usuários
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <form action="<?= base_url(); ?>/usuarios/salvar" method="POST">
          <div class="card-body row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Usuário</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="user_name">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="user_email">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Senha</label>
              <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="user_password">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">CPF</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="user_cpf">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Telefone</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="user_phone">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Tipo</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="user_type">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Endereço</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="user_adddress">
            </div>

            <input type="hidden" value="" name="id_user">

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
  </div>

</section>
<!-- /.content -->
<?= $this->endSection(); ?>