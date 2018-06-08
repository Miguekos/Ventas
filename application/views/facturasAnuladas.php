<?php 
//Conexion a la base de datos.	
include 'database.php';
mysqli_select_db($con,"ajax_demo");

$num_facturas = "Select id_factura from ventas where estado = 0 order by id_factura desc limit 1";
$result_N_F = mysqli_query($con,$num_facturas);
$row = mysqli_fetch_array($result_N_F);
$conteo_f = $row[0];
// echo count($row);
// echo $conteo_f;

$facturasX = "Select distinct id_factura from ventas where estado = 0";
$result_N_FX = mysqli_query($con,$facturasX);

?>
<div id="container">
	<h1 id="h2Caja">Facturas</h1>

	<div id="body">

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th data-field="Factura" class="text-center">Factura</th>
                    <th data-field="Fecha" class="text-center">Fecha</th>
                    <th data-field="Total S/." class="text-center">Total S/.</th>
                    <th data-field="Accion" class="text-center">Accion</th>
                </tr>
            </thead>
            <tbody>

        <?php
while ($rowX = mysqli_fetch_array($result_N_FX)) {
    // echo $rowX[0]."<br>";
        
            $dias_S = array("Dom","Lun","Mar","Mie","Jue","Vie","Sab");
            $meses_S = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
            //Obtengo las facturas que tengan el mismo id de factura
            $ventas = "Select id_factura, hora from ventas where id_factura = ".$rowX[0]." and estado = '0'";
            // print_r($ventas);
            // if ($ventas == 1) {
            //     echo "no esta anulada";
            // }else{
                $ventas_1 = mysqli_query($con,$ventas);
                $row = mysqli_fetch_array($ventas_1);
                //Sumo todos los resultados de los productos por id de factura para obtener el total de la factura
                $sum_facturas = "Select sum(total) from ventas where id_factura = ".$rowX[0]." and estado = '0'";
                $result_S_F = mysqli_query($con,$sum_facturas);
                $rowS = mysqli_fetch_array($result_S_F);
                $num1 = $row[0];
                $num2 = $row[1];
                $date = date_create("$num2");
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
                
                $num3 = $rowS[0];
                $num4 = number_format($num3, 2, '.', '') ." S/";
                echo "<tr>";
                echo "<td class='text-center'>".$num1."</td>";
                echo "<td class='text-center'>".$dia1." ".$dia2.", ".$mes." ".$ano.", ".$hora."</td>";
                echo "<td class='text-center'>".$num4."</td>";
                echo "<td class='text-center'><a href='noAnularFactura?id=$num1' class='btn btn-xs btn-success'>Reanudar</a></td>";
                echo "</tr>";
        }
        ?>
            </tbody>
        </table>

		
	</div>