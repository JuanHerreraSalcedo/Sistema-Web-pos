<!DOCTYPE html>
<html lang="en">

<?php require_once "header.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo $ruta; ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php require_once "nav.php" ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php require_once "menu.php";
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h1 class="box-title">Categoría<buton class="btn btn-success" id="btnagregar" onclick="mostrarFormulario(true)"><i class="fa fa-plus-circle"></i> Agregar</buton>
                </h1>
                <div class="box-tools pull-right">
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->

              <div class="panel-body table-responsive" id="listadoregistros">
                <table id="tablalistado" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Opciones</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                    <th>Opciones</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                  </tfoot>
                </table>
              </div>
              <div class="panel-body" style="height: 400px" id="formularioRegistros">
                <form name="formulario" action="id" method="post">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Nombre:</label>
                    <input type="hidden" name="idcategoria" id="idcategoria">
                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripción" required>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                    <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
    <!-- /.content-wrapper -->

    <?php
    require_once "footer.php";
    ?>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo $ruta; ?>plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo $ruta; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo $ruta; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo $ruta; ?>plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo $ruta; ?>plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo $ruta; ?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?php echo $ruta; ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo $ruta; ?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo $ruta; ?>plugins/moment/moment.min.js"></script>
  <script src="<?php echo $ruta; ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo $ruta; ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?php echo $ruta; ?>plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo $ruta; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo $ruta; ?>dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo $ruta; ?>dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo $ruta; ?>dist/js/pages/dashboard.js"></script>

  <script type="tet/javascript" src="../vistas/codigos.js/categoria.js"></script>
</body>

</html>