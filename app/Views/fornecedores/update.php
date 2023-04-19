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
          Atualização de Fornecedores
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="<?= base_url(); ?>/fornecedores/salvar" method="POST">
          <div class="card-body row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Nome do Fornecedor</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" value="<?= $result["fornecedor_nome"]; ?>" name="fornecedor_nome">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Tipo</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" value="<?= $result["fornecedor_tipo"]; ?>" name="fornecedor_tipo">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">CNPJ</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" value="<?= $result["fornecedor_cnpj"]; ?>" name="fornecedor_cnpj">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Telefone</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" value="<?= $result["fornecedor_telefone"]; ?>" name="fornecedor_telefone">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" value="<?= $result["fornecedor_email"]; ?>" name="fornecedor_email">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Endereço</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" value="<?= $result["fornecedor_endereco"]; ?>" name="fornecedor_endereco">
            </div>

            <input type="hidden" value="<?= $result["id_fornecedor"]; ?>" name="id_fornecedor">

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