<?=$this->section('content');?>

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
                    Titulo da Tabela
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                

                <table id="example1" class="table table-bordered table-striped myTable table-sm" style="font-size: 12px !important">
					<thead class="bg-olive text-center">
					  <tr>
					    <th> TITULO 1</th>
					    <th> TITULO 2</th>
					    <th> TITULO 3</th>
					    <th> TITULO 4</th>
					    <th> TITULO 5</th>
					    <th> TITULO 6</th>
					    <th> TITULO 7</th>                    
					  </tr>
					</thead>
					<tbody class="text-center"> 
					  	<?php for($a=0;$a<11;$a++): ?>
					        <tr> 
					        	<td> CELULA 1 </td>      
					        	<td> CELULA 1 </td>      
					        	<td> CELULA 1 </td>      
					        	<td> CELULA 1 </td>      
					        	<td> CELULA 1 </td>      
					        	<td> CELULA 1 </td>      
					        	<td> CELULA 1 </td>              
					        </tr>
					  	<?php endfor; ?>
					</tbody>

					<tfoot class="text-center">
					  <tr>
					    <th> TITULO 1 </th>
					    <th> TITULO 2 </th>
					    <th> TITULO 3 </th>
					    <th> TITULO 4 </th>
					    <th> TITULO 5 </th>
					    <th> TITULO 6 </th>
					    <th> TITULO 7 </th>                    
					  </tr>
					</tfoot>
                </table>
              </div>
              <!-- /.card-body -->
        </div>
      </div>
    
    </section>
    <!-- /.content -->
<?=$this->endSection(); ?>