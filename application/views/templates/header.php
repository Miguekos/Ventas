<!DOCTYPE html>
<html lang="es">
<head>
  
  <meta http-equiv="Content-Type" content="text/html; charset="UTF-8"">
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <title><?php echo $pageTitle; ?></title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

  <meta name="viewport" content="width=device-width" />

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets\bootstrap\dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="assets\css\animate.css">
  <link rel="stylesheet" href="assets\css\dataTables.bootstrap.min.css">
  <script src="assets\js\jquery-1.12.4.js"></script>
  <script src="assets\js\jquery.dataTables.min.js"></script>
  
  <script src="assets\js\dataTables.bootstrap.min.js"></script>
  <script src="assets\bootstrap-notify-master\bootstrap-notify.js"></script>

  <script src="assets\sweetalert2\sweetalert2.all.js"></script>
  <script src="assets\sweetalert2\sweetalert2.js"></script>

  <!-- ... -->
  <script type="text/javascript" src="assets/moment/min/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    
  <script type="text/javascript" src="assets\moment\moment.js"></script>
  <script type="text/javascript" src="assets\bootstrap-datetimepicker\build\js\bootstrap-datetimepicker.min.js"></script>

  <link rel="stylesheet" href="assets\bootstrap-datetimepicker\build\css\bootstrap-datetimepicker.css"/>
  <script type="text/javascript" src="assets\bootstrap\js\transition.js"></script>
  <script type="text/javascript" src="assets\bootstrap\js\collapse.js"></script>
 
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		/* background-color: #f1f1f1; */
		background-color: #fff;
		margin: 10px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#bodyCaja {

		margin: 0 20% 0 20%;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		/* background-color: #f1f1f1; */
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		/* background-color: #f1f1f1; */
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 2px 2px 10px 2px #D0D0D0;
	}

	#h2Caja {
	  /* text-decoration: underline; */
	  /* font-style: italic; */
	  /* font-weight: bold; */
	  /* font-family: "Lucida Console", Monaco, monospace; */
	  color: #000000;
	/* font-size: 12em; */
	/* font-weight: bold;
	font-family: Helvetica;
	text-shadow: 0 1px 0 #ccc, 0 2px 0 #c9c9c9, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 2px 5px rgba(0,0,0,.25), 0 5px 5px rgba(0,0,0,.2), 0 5px 5px rgba(0,0,0,.15);
	background-color: #f1f1f1; */
	}
	
	.sombra{
		box-shadow: 2px 2px 5px grey;
	}
	
	</style>

</head>
<body style="font-family: 'segoe ui';" onkeydown="imprimir()">

<?php 
date_default_timezone_set('America/Lima');
  
//CConexion a la base de datos. 
include 'database.php';
mysqli_select_db($con,"ajax_demo");

$ultimahora = "Select horasdelcierre from horadecierre order by horasdelcierre desc limit 1";
$uhc = mysqli_query($con,$ultimahora);
$uhc1 = mysqli_fetch_array($uhc);
$uhc2 = $uhc1[0];
//echo "Ultimahoradel cierre".$uhc2;

$TotalCajaMem = "Select sum(pago) from xport.cliente WHERE update_at > '$uhc2'";
$totalcMem = mysqli_query($con,$TotalCajaMem);
$rowTCMem = mysqli_fetch_array($totalcMem);
$total_caja_mem = $rowTCMem[0];
//echo $total_caja_mem;

$TotalCaja = "Select sum(total) from ventas WHERE hora > '$uhc2'";
$totalc = mysqli_query($con,$TotalCaja);
$rowTC = mysqli_fetch_array($totalc);
$total_caja = $rowTC[0] + $total_caja_mem;
// echo $conteo_f;

$cajachicasuma = "Select sum(cajachica) from control where accion = 'deposito'";
$cajasuma = mysqli_query($con,$cajachicasuma);
$cajasuma = mysqli_fetch_array($cajasuma);
$tcajasuma = $cajasuma[0];

$cajachicaresta = "Select sum(cajachica) from control where accion = 'retiro'";
$cajaresta = mysqli_query($con,$cajachicaresta);
$cajaresta = mysqli_fetch_array($cajaresta);
$tcajaresta = $cajaresta[0];
// echo $tcaja;
$tcaja = $tcajasuma - $tcajaresta;

?>

<!-- Blanco -->
<!-- <nav id="container" class="navbar navbar-default"> -->
<!-- Negro-->
<nav id="container" style="background-color: ;" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a  class="navbar-brand" href="./">GYM Xport</a>
    </div>
      <ul class="nav navbar-nav">
        <li class="<?php echo $ventas; ?>"><a href="ventas">Facturas</a></li>
        <li class=""><a href="abonomembresias">Control Membresias</a></li>
        <li class="<?php echo $filtropordia; ?>"><a href="filtropordia">Filtrar por Dias</a></li>
        <li class="<?php echo $otro; ?> dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Otros <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="cierre">Cierre de Caja</a></li>
            <li><a href="cajachica">Caja Chica</a></li>
            <li class="divider"></li>
            <!-- <li><a href="agregarCompras">Agregar Compras</a></li> -->
						<li><a href="productos">Productos</a></li>
            <li class="divider"></li>
						<li><a href="facturasAnuladas">Facturas Anuladas</a></li>
            <!-- <li><a href="#">Pruebas</a></li> -->
          </ul>
        </li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" class="">Caja Chica: <?php echo number_format($tcaja, 2, ',', '.') ." S/"; ?></a></a></li>
      <li><a href="#" class="">Total Caja: <?php echo number_format($total_caja, 2, ',', '.') ." S/"; ?></a></li>
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
    </ul>
  </div>
</nav>