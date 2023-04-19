<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page" id="back">
  <div class="login-box" >
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body" style="border-radius: 10px;">
        <a href="<?= site_url() ?>"><img class="img-thumbnail" src="<?= $logo ?>"></a>

        <?php foreach ($mensagens as $mensagem) : ?>
          <p class="login-box-msg bg-<?= $mensagem['tipo'] ?>" style="padding: 0px !important"><?= $mensagem['descricao'] ?></p>
        <?php endforeach ?>

        
        <form action="<?= base_url("logar") ?>" method="post">
          <div class="input-group mb-3">

            <input type="text" name="usuario" class="form-control" placeholder="Usuario" value="<?= set_value('usuario', '') ?>">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>

          </div>
          <div class="input-group mb-3">
            <input type="password" name="senha" class="form-control" placeholder="Senha">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-12 text-end">
              <button type="submit" class="btn btn-outline-primary btn-block"> Entrar </button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <!--
        <p class="mb-1">
          <a class="text-right" href="forgot-password.html">Esqueci minha senha</a>
        </p>
        -->

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>/public/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>/public/dist/js/adminlte.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
  <script>
    VANTA.WAVES({
      el: "#back",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      shininess: 40.00,
      waveHeight: 17.50,
      waveSpeed: 0.40,
      zoom: 0.65
    })
  </script>
</body>

</html>