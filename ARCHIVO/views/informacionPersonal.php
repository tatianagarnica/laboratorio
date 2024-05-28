<?php
define("BASE URL","/ARCHIVO/views/");
require_once("../config/conecxion.php");
if (isset($_SESSION["usu_id"])){
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Tabbed IFrames</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <style>
    .crear .btn1 {
    padding: 10px 20px;
    color:#1e90ff;
    background: #fff;
    border: 1px solid #1e90ff;
    border-radius: 4px;
    cursor: pointer;
    }
    .btn1:hover{
        border: 1px solid blue;
        color: blue;
        transition: 0.5;
        
    }
    .crear .btn2 {
    padding: 10px 20px;
    color: #ccc;
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
    cursor: pointer;
    }
    .btn2:hover{
        border: 1px solid #000;
        color: #000;
        transition: 0.5;
        
    }
    .card-footer{
        height: 50px;
    }
    .card-footer .parr1{
        font-weight: bold;
    }
    .card-footer .parr2{
        font-weight: bold;
        position: relative;
        left: 200px;
        top: -40px;
    }
    .card-footer .parr3{
        font-weight: bold;
        position: relative;
        left: 400px;
        top: -80px;
    }
    .card-footer .parr4{
        font-weight: bold;
        position: relative;
        left: 600px;
        top: -120px;
    }
    .card-footer .parr5{
        font-weight: bold;
        position: relative;
        left: 800px;
        top: -160px;
    }
    .card-footer .parr6{
        font-weight: bold;
        position: relative;
        left: 1000px;
        top: -200px;
    }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("./modulos/header.php");?>
  <!-- /.n avbar -->

  <!-- Main Sidebar Container -->
  <?php include("./modulos/menu.php");?>

</section>
<div class="content-wrapper">
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">

</div>
</div>
</div>
</section>

<section class="content">

    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Admon de Informacion Personal</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
    <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
    <i class="fas fa-times"></i>
    </button>
    </div>
    </div>
    <div class="card-body">
        <div class="crear">
        <button class="btn1" type="submit">Crear</button>

        <button class="btn2" type="submit">Cargar</button>
        </div>
    </div>

    <div class="card-footer">
        <p class="parr1">Fecha de Nacimiento</p>
        <p class="parr2">Celular</p>
        <p class="parr3">Correo</p>
        <p class="parr4">Url</p>
        <p class="parr5">Direccion</p>
        <p class="parr6">Cargo</p>
    </div>

    </div>

</section>


</div>
  
    
  
  <!-- /.content-wrapper -->
  <?php include("./modulos/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
<?php
  }else{
   header("location:". conectar::ruta() ."/ARCHIVO/views/404.php");
  }
?>