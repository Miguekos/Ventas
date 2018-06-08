<?php 
//Conexion a la base de datos.	
include 'database.php';
mysqli_select_db($con,"ajax_demo");


$num_cierres = "Select id from horadecierre order by id desc limit 1";
$result_C = mysqli_query($con,$num_cierres);
$rowC = mysqli_fetch_array($result_C);
$conteo_C = $rowC[0];
//echo "cierres: ".$conteo_C;

// $ultimahora = "Select horasdelcierre from horadecierre order by horasdelcierre desc limit 1";
// $uhc = mysqli_query($con,$ultimahora);
// $uhc1 = mysqli_fetch_array($uhc);
// $uhc2 = $uhc1[0];
// //echo "Ultimahoradel cierre".$uhc2;

// $TotalCaja = "Select sum(total) from ventas WHERE hora > '$uhc2'";
// $totalc = mysqli_query($con,$TotalCaja);
// $rowTC = mysqli_fetch_array($totalc);
// $total_caja = $rowTC[0];
// // echo $conteo_f;

// $cajachica1 = "Select cajachica from control order by hora desc limit 1";
// $caja2 = mysqli_query($con,$cajachica1);
// $caja3 = mysqli_fetch_array($caja2);
// $tcaja = $caja3[0];
// // echo $tcaja;

// $totaltt = $total_caja + $tcaja;

$ultimahora = "Select horasdelcierre from horadecierre order by horasdelcierre desc limit 1";
$uhc = mysqli_query($con,$ultimahora);
$uhc1 = mysqli_fetch_array($uhc);
$uhc2 = $uhc1[0];
//echo "Ultimahoradel cierre".$uhc2;

$TotalCajaMem = "Select sum(abono) from xport.cliente WHERE update_at > '$uhc2'";
$totalcMem = mysqli_query($con,$TotalCajaMem);
$rowTCMem = mysqli_fetch_array($totalcMem);
$total_caja_mem = $rowTCMem[0];
//echo $total_caja_mem;

$TotalCaja = "Select sum(total) from ventas WHERE hora > '$uhc2'";
$totalc = mysqli_query($con,$TotalCaja);
$rowTC = mysqli_fetch_array($totalc);
//Suma de Ventas + Membresias
$total_caja = $rowTC[0] + $total_caja_mem;


$cajachicasuma = "Select sum(cajachica) from control where accion = 'deposito'";
$cajasuma = mysqli_query($con,$cajachicasuma);
$cajasuma = mysqli_fetch_array($cajasuma);
$tcajasuma = $cajasuma[0];

$cajachicaresta = "Select sum(cajachica) from control where accion = 'retiro'";
$cajaresta = mysqli_query($con,$cajachicaresta);
$cajaresta = mysqli_fetch_array($cajaresta);
$tcajaresta = $cajaresta[0];
//caja chica
$tcaja = $tcajasuma - $tcajaresta;

?>

<div id="container">
	<h1 id="h2Caja">Cierre de Caja!</h1>

	<div id="body">
	
			<form action="guardarcierre" method="POST" id="guardarcierre" accept-charset="utf-8">
				<div class="container">
					<input type="hidden" name="cierre" value="<?php echo $conteo_C + 1; ?>">
						
					<div class="form-group col-lg-2">
					</div>
					<div class="form-group col-lg-2">
						<label>Caja Chica</label>
						<input type="text" class="form-control" readonly value="<?php echo number_format($tcaja, 2, ',', '.') ." S/"; ?>" name="cajachicac">
					</div>	
					<div class="form-group col-lg-2">
						<label>Total pagos Membresias</label>
						<input type="text" class="form-control" readonly value="<?php echo number_format($total_caja_mem, 2, ',', '.') ." S/"; ?>" name="totalmemc">
					</div>
					<div class="form-group col-lg-2">
						<label>Total en Ventas</label>
						<input type="text" class="form-control" readonly value="<?php echo number_format($rowTC[0], 2, ',', '.') ." S/"; ?>" name="totalventasc">
					</div>
					<div class="form-group col-lg-2">
						<label>Total en Caja</label>
						<input type="text" class="form-control" readonly value="<?php echo number_format($total_caja, 2, ',', '.') ." S/"; ?>" name="totalcajac">
					</div>
					<div class="form-group col-lg-2">
					</div>
				</div>
				<div class="text-center form-group col-lg-12">
					<input type="text" onclick="popupCierre()" class="btn sombra btn-info" value="Cerrar Caja N°: <?php echo $conteo_C + 1; ?>">
				</div>
			</form>
			<?php 

			$num_facturas = "Select id from cierre order by id desc limit 1";
			$result_N_F = mysqli_query($con,$num_facturas);
			$row = mysqli_fetch_array($result_N_F);
			$conteo_f = $row[0];
			//echo "conteo: ".$conteo_f;
			?>

			<div class="container">
				<!-- <h2 class="text-center">Historial</h2> -->
					<table id="example" class="table table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th data-field="" class="text-center">id</th>
							<th data-field="" class="text-center">Caja Chica</th>
							<th data-field="" class="text-center">Total en Membresias</th>
							<th data-field="" class="text-center">Total en Ventas</th>
							<th data-field="" class="text-center">Total en caja</th>
							<th data-field="" class="text-center">Fecha</th>
						</tr>
					</thead>
					<tbody>

			<?php

			$x = 1;
			while ($conteo_f >= $x) {
				$dias_S = array("Dom","Lun","Mar","Mie","Jue","Vie","Sab");
				$meses_S = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
				//Obtengo las facturas que tengan el mismo id de factura
				$ventas = "Select * from cierre where id = ".$x."";
				$ventas_1 = mysqli_query($con,$ventas);
				$row = mysqli_fetch_array($ventas_1);
				//Sumo todos los resultados de los productos por id de factura para obtener el total de la factura
				//$sum_facturas = "Select sum(total) from ventas where id_factura = $x";
				//$result_S_F = mysqli_query($con,$sum_facturas);
				//$rowS = mysqli_fetch_array($result_S_F);
				$item1 = $row[0];
				$item2 = $row[1];
				$item3 = $row[2];
				$item4 = $row[3];
				$item5 = $row[4];
				$item6 = $row[5];

				$date = date_create("$item6");
				$diaL1 = date_format($date,"w");
				$diaN1 = date_format($date,"j");
				$mes1 = date_format($date,"n")-1;
				$ano1 = date_format($date,"Y");
				$hora = date_format($date,"g:i a");
				$dia1 = $dias_S["$diaL1"];
				$dia2 = $diaN1;
				$mes =  $meses_S["$mes1"];
				$ano =  $ano1;
				$hora = $hora;
				// $fecha = date_format($date,"$dias_S['n']");
				
				//$num3 = $rowS[0];
				//$num4 = number_format($num3, 2, '.', '') ." S/";
				echo "<tr>";
					echo "<td class='text-center'>".$item1."</td>";
					echo "<td class='text-center'>".$item2."</td>";
					echo "<td class='text-center'>".$item3."</td>";
					echo "<td class='text-center'>".$item4."</td>";
					echo "<td class='text-center'>".$item5."</td>";
					echo "<td class='text-center'>".$dia1." ".$dia2.", ".$mes." ".$ano.", ".$hora."</td>";
					
					echo "</tr>";
				// echo "<div class='text-center'>".$num1." ".$num2."</div>";
				// echo "<div class='text-center'>".$num2."</div><br>";
				$x = $x + 1;
			}
			?>
					</tbody>
				</table>
			<!-- </div> -->
		</div>
	</div>

<script>
function popupCierre(){
swal({
  title: 'Estas Seguro, Quieres cerrar la caja?',
  text: "",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: ' Si, quiero cerrar! ',
  cancelButtonText: ' No, cancelar! ',
  confirmButtonClass: 'btn btn-success',
  cancelButtonClass: 'btn btn-danger',
  buttonsStyling: true,
  reverseButtons: true
}).then((result) => {
  if (result.value) {
	$("#guardarcierre").submit();
  } else if (
    // Read more about handling dismissals
    result.dismiss === swal.DismissReason.cancel
  ) {
    swal(
      'Cancelado, Has cancelado el intento de cerrar la caja :)',
      '',
      'error'
    )
  }
})
}
</script>