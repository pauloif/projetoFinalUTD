<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; <?=date('Y');?> <a href="#">PH Construtora</a>.</strong>
  Todos os direitos reservados.
  <div class="float-right d-none d-sm-inline-block">
    <b>Versão</b> 0.1.1
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url(); ?>/public/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url(); ?>/public/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- <script src="<?= base_url(); ?>/public/plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<script src="<?= base_url(); ?>/public/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/jqvmap/maps/jquery.vmap.brazil.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url(); ?>/public/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url(); ?>/public/plugins/moment/moment.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url(); ?>/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url(); ?>/public/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>/public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>/public/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url(); ?>/public/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url(); ?>/public/dist/js/pages/dashboard.js"></script> -->
<script src="<?= base_url(); ?>/public/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($js)): ?>
  <?php foreach ($js as $j) : ?>
    <script src="<?= $j ?>"></script>
  <?php endforeach; ?>
<?php endif; ?>


<?php $session = \Config\Services::session(); ?>
<?php if ($mensagem = $session->getFlashdata('mensagem')) : ?>    
    <script type="text/javascript">
      Swal.fire({
        icon: "<?= $mensagem['tipo']; ?>",
        title: 'Mensagem',
        html: "<?=$mensagem['mensagem'];?>"        
      });
    </script>
<?php endif; ?>

</body>

</html>