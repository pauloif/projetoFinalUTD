<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Cadastro</h1>
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
          Adicionar Produto
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <form action="<?= base_url(); ?>/produtos/salvar" method="POST">
          <div class="card-body row">
            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Nome do Produto</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="product_name">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Codigo do Produto</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="product_code">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Preço do Produto</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="product_price">
            </div>

            <div class="form-group col-md-6">
              <label for="exampleInputEmail1">Estoque do Produto</label>
              <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Digite o dado" name="product_stock">
            </div>

            <input type="hidden" value="" name="id_product">

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