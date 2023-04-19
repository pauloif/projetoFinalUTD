<?= $this->section('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Lista de Usuários</h1>
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

                <table id="example1" class="table table-bordered table-striped myTable table-sm" style="font-size: 12px !important">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuário</th>
                            <th>Email</th>
                            <th>Senha</th>
                            <th>CPF</th>
                            <th>Contato</th>
                            <th>Tipo</th>
                            <th>Endereço</th>
                            <th>Criado EM</th>
                            <th> Ações </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($result as $r) : ?>
                            <tr>
                                <td><?= $r['id_user']; ?></td>
                                <td><?= $r['user_name']; ?></td>
                                <td><?= $r['user_email']; ?></td>
                                <td><?= $r['user_password']; ?></td>
                                <td><?= $r['user_cpf']; ?></td>
                                <td><?= $r['user_phone']; ?></td>
                                <td><?= $r['user_type']; ?></td>
                                <td><?= $r['user_adddress']; ?></td>
                                <td><?= $r['user_created_in']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>/usuarios/editar/<?= $r['id_user']; ?>" class="btn btn-xs btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?= $r['id_user']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    
                                    <div class="modal fade" id="delete-<?= $r['id_user'];?>">
                                        <form action="<?=base_url();?>/usuarios/deletar" method="POST">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Excluir Usuário?</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="font-size: 15px !important;">
                                                        Tem certeza que deseja excluir o Usuário <strong><?= $r['user_name']; ?></strong>?<br>
                                                        A operação não poderá ser desfeita!
                                                    </div>
                                                    <input type="hidden" value="<?=$r['id_user'];?>" name="id">
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                        <button type="submit" class="btn btn-primary">Sim, continuar!</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </form>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

</section>
<!-- /.content -->
<?= $this->endSection(); ?>