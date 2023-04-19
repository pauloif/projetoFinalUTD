
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=base_url();?>/index.php" class="brand-link">
      <img src="<?=base_url();?>/public/assets/images/phconstrutora.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <!-- <img src="https://w7.pngwing.com/pngs/163/964/png-transparent-contract-computer-icons-rental-agreement-others-miscellaneous-angle-text-thumbnail.png" alt="Logo Contratos" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">PH Construtora</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://pt.seaicons.com/wp-content/uploads/2016/09/User-icon.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> Olá, NOMEUSUARIO </a>
          <!-- a href="#" class="d-block"> Olá, { NomeUsuário } </a> -->
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item"><a href="<?php echo base_url('/'); ?>" class="nav-link"><span class="iconify" data-icon="entypo:bar-graph" data-width="23" data-height="23"></span> <p> Dashboard </p></a> </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
              <span class="iconify" data-icon="tabler:tool" data-width="24" data-height="24"></span>
                <p>
                   Produtos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">              
                <li class="nav-item">
                  <a href="<?=base_url();?>/produtos/lista" class="nav-link">
                  <span class="iconify" data-icon="tabler:tool" data-width="15" data-height="15"></span>
                    <p> Listar</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?=base_url();?>/produtos/inserir" class="nav-link">
                  <span class="iconify" data-icon="icon-park-outline:file-addition-one" data-width="15" data-height="15"></span>
                    <p> Adicionar</p>
                  </a>
                </li>
              </ul>
            </li>



            <li class="nav-item">
              <a href="#" class="nav-link">
              <span class="iconify" data-icon="mdi:company" data-width="24" data-height="24"></span>
                <p>
                  Fornecedores
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">              
                <li class="nav-item">
                  <a href="<?=base_url();?>/fornecedores/lista" class="nav-link">
                  <span class="iconify" data-icon="mdi:company" data-width="15" data-height="15"></span>
                    <p>Listar</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?=base_url();?>/fornecedores/inserir" class="nav-link">
                  <span class="iconify" data-icon="icon-park-outline:file-addition-one" data-width="15" data-height="15"></span>
                    <p>Adicionar</p>
                  </a>
                </li>
              </ul>
            </li>

           
            <li class="nav-item">
              <a href="#" class="nav-link">
              <span class="iconify" data-icon="jam:users" data-width="24" data-height="24"></span>
                <p>
                  Usuários
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">              
                <li class="nav-item">
                  <a href="<?=base_url();?>/usuarios/lista" class="nav-link">
                  <span class="iconify" data-icon="jam:users" data-width="15" data-height="15"></span>
                    <p>Listar</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?=base_url();?>/usuarios/inserir" class="nav-link">
                  <span class="iconify" data-icon="icon-park-outline:file-addition-one" data-width="15" data-height="15"></span>
                    <p>Adicionar</p>
                  </a>
                </li>
              </ul>
            </li>


            <li class="nav-item"><a href="#" class="nav-link"><span class="iconify" data-icon="bx:bx-user" data-width="26" data-height="26"></span> <p> Seu Perfil </p></a> </li>
            <li class="nav-item"><a href="<?php echo base_url('logout'); ?>" class="nav-link"><span class="iconify" data-icon="bx:bx-power-off" data-width="26" data-height="26"></span> <p> Sair do Sistema </p></a> </li>
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>