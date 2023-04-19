<?=$this->section('content');?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">        
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Seu Perfil </h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="http://192.168.0.200/clubecf">Inicio</a></li>
                  <li class="breadcrumb-item active">User Profile</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                           src="https://pt.seaicons.com/wp-content/uploads/2016/09/User-icon.png"
                           alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center"><?=$result[0]['USER_NAME'];?></h3>

                    <p class="text-muted text-center">Acesso Sistema</p>

                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Filial</b> <a class="float-right"><?=$result[0]['USER_FILIAL'];?></a>
                      </li>
                      <!-- <li class="list-group-item">
                        <b>Following</b> <a class="float-right">543</a>
                      </li>
                      <li class="list-group-item">
                        <b>Friends</b> <a class="float-right">13,287</a>
                      </li> -->
                    </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <!-- <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                      <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                      <li class="nav-item active"><a class="nav-link" href="#settings" data-toggle="tab"> Dados de Acesso </a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      

                      <div class="active tab-pane" id="settings">
                        <form class="form-horizontal" action="<?=base_url();?>/PerfilController/editar" method="POST">
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="USER_NAME" id="inputName" value="<?=$result[0]['USER_NAME'];?>" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail" value="<?=$result[0]['USER_EMAIL'];?>"  placeholder="Email" disabled>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Filial</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName2" value="<?=($result[0]['USER_FILIAL']== null) ? "SEM FILIAL" : $result[0]['USER_FILIAL'] ;?>"  placeholder="Name" disabled>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Senha</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" name="USER_PASSWORD" id="inputSkills" placeholder="Preencha caso queira alterar">
                            </div>
                          </div>                          
                          <input type="hidden" name="ID_USER" value="<?=$result[0]['ID_USER'];?>">
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Alterar Dados</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
      </div>    
    </section>
    <!-- /.content -->
<?=$this->endSection(); ?>