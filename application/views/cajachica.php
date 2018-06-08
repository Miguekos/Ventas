<?php 
//Conexion a la base de datos.	
include 'database.php';
mysqli_select_db($con,"ajax_demo");

$cajaC = "Select * from control";
$cajachica_control = mysqli_query($con,$cajaC);

?>
<div id="container">
	<h1 id="h2Caja">Caja Chica</h1>

	<div id="body">

		<form action="insertarCaja" id="insertarCaja" method="POST" accept-charset="utf-8">
			<div class="container">
				<div class="form-group col-lg-4">
					<?php
					$this->load->helper('form');
					$success = $this->session->flashdata('success');
					if ($success) {
						?>
							<script>
							swal({
								position: 'top-end',
								type: 'success',
								title: 'Se guardo caja chica..!!',
								showConfirmButton: false,
								timer: 2000
								})
							</script>
						<?php

					}
					$error = $this->session->flashdata('error');
					if ($error) {
						?>
							<script>
							swal({
								position: 'top-end',
								type: 'error',
								title: 'No guardo..!!',
								showConfirmButton: false,
								timer: 2000
								})
							</script>
						<?php
					}
					?>
				</div>
				<!-- accion -->
				<div class="row col-sm-12 text-center">
				<div class="form-group col-sm-4">
					<!-- Izquierda -->
				</div>
				
					<div class="form-group text-center col-sm-4">
						<label>Accion</label>
						
						<select autofocus class="form-control text-center" required name="accion">
							<option value="0">-- SELECIONE ACCION --</option>
							<option value="deposito">Deposito</option>
							<option value="retiro">Retiro</option>
						</select>
					</div>

				<div class="form-group col-sm-4">
					<!-- Derecha -->
				</div>
				</div>

				<br>
				<br>

				<!-- Monto -->
				<div class="row col-sm-12 text-center">
					<div class="form-group col-sm-4">
						<!-- Izquierda -->
					</div>

					<div class="form-group col-sm-4">
						<label>Monto</label>
						<input type="number" required class="form-control" name="cajac">
					</div>

					<div class="form-group col-sm-4">
						<!-- Derecha -->
					</div>
				</div>
				
				<!-- Motivo -->
				<div class="row col-sm-12 text-center">
					<label>Motivo</label>
				</div>
				<div class="row col-sm-12 text-center">
					<div class="form-group col-sm-3 text-center">
						<!-- Izquierda -->
					</div>

					<div class="form-group col-sm-6 text-center	">
					
						<textarea class="form-control" rows="4" cols="50" name="motivo"></textarea>
						
					</div>

					<div class="form-group col-sm-3">
						<!-- Derecha -->
					</div>
				</div>

				
				<div class="text-center form-group col-lg-12">
					<input type="submit" class="btn sombra btn-info" value="Guardar">	
				</div>

			
		</form>



		<div class="row col-sm-12">
			
<table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                	<th class="text-center">#</th>
                    <th class="text-center">Catidad</th>
                    <th class="text-center">Accion</th>
                    <th class="text-center">Motivo</th>
                    <th class="text-center">Fecha</th>
                </tr>
            </thead>
            <tbody>

        <?php
	while ($rowX = mysqli_fetch_array($cajachica_control)) {

		// echo $rowX['cajachica'];
    
            // $dias_S = array("Dom","Lun","Mar","Mie","Jue","Vie","Sab");
            // $meses_S = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
            //Obtengo las facturas que tengan el mismo id de factura
            // $ventas = "Select id_factura, hora from ventas where id_factura = ".$rowX[0]." and estado = '1'";
            // print_r($ventas);
            // if ($ventas == 1) {
            //     echo "no esta anulada";
            // }else{
                // $ventas_1 = mysqli_query($con,$ventas);
                // $row = mysqli_fetch_array($ventas_1);
                // $sum_facturas = "Select sum(total) from ventas where id_factura = ".$rowX[0]." and estado = '1'";
                // $result_S_F = mysqli_query($con,$sum_facturas);
                // $rowS = mysqli_fetch_array($result_S_F);
                // $num1 = $row[0];
                // $num2 = $row[1];
                // $date = date_create("$num2");
                // $diaL1 = date_format($date,"w");
                // $diaN1 = date_format($date,"j");
                // $mes1 = date_format($date,"n")-1;
                // $ano1 = date_format($date,"Y");
                // $hora = date_format($date,"g:i a");
                // $dia1 = $dias_S["$diaL1"];
                // $dia2 = $diaN1;
                // $mes =  $meses_S["$mes1"];
                // $ano =  $ano1;
                // $hora = $hora;

                // $fecha = date_format($date,"$dias_S['n']");
                
                // $num3 = $rowS[0];
                // $num4 = number_format($num3, 2, '.', '') ." S/";
                echo "<tr>";
                echo "<td class='text-center'>".$rowX['idC']."</td>";
                echo "<td class='text-center'>".$rowX['cajachica']."</td>";
                echo "<td class='text-center'>".$rowX['accion']."</td>";
                echo "<td class='text-center'>".$rowX['motivo']."</td>";
                echo "<td class='text-center'>".$rowX['hora']."</td>";
                echo "</tr>";
        }
        ?>
            </tbody>
        </table>


		</div>




	</div>
	
	
	
