<?php 
    //CConexion a la base de datos. 
    // $fecha_i = $_POST['fecha1'];
    // echo "$fecha_i"."<br>";
    // $fecha_f = $_POST['fecha2'];
    //echo "$fecha_f"."<br>";
    include 'database.php';
    mysqli_select_db($con,"ajax_demo");

    $filtrarD = "Select sum(total) from ventas";
    // echo "$filtrarD";
    $filtrarD1 = mysqli_query($con,$filtrarD);
    $filtrarD2 = mysqli_fetch_array($filtrarD1);
    $filtrarD3 = $filtrarD2[0];
    // echo $filtrarD3;

    $filtrar1D = "Select * from ventas";
    // echo "$filtrar1D";
    $filtrar1D1 = mysqli_query($con,$filtrar1D);
    // $filtrar1D2 = mysqli_fetch_array($filtrar1D1);
    // $filtrar1D3 = $filtrar1D2[0];
    // echo $filtrarD3;
?>

<div id="container">
    <h1 id="h2Caja">Ventas<i class="pull-right"></i></h1>
    <!-- <h1 id="h2Caja">Ventas<i class="pull-right"><?php echo "Total en soles de la Busqueda: <b>".number_format($filtrarD3, 2, ',', '.') ." S/</b>"; ?></i></h1> -->
    
    <div id="body"> 
        <div>
            <h2 class="text-center"></h2>
        </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th class="text-center">N. Factura</th>
                <th class="text-center">Producto</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Precio Unidad</th>
                <th class="text-center">Precio Total S/.</th>
                <th class="text-center">Fecha</th>
            </tr>
            </thead>
            <tbody>
        <?php
            while($row = mysqli_fetch_array($filtrar1D1)) {
                echo "<tr>";
                echo "<td class='text-center'>".$row[1]."</td>";
                echo "<td class='text-center'>".$row[3]."</td>";
                echo "<td class='text-center'>".$row[4]."</td>";
                echo "<td class='text-center'>".$row[5]."</td>";
                echo "<td class='text-center'>".$row[6]." S/.</td>";
                echo "<td class='text-center'>".$row[7]." S/.</td>";
                echo "<td class='text-center'>".$row[9]."</td>";
                echo "</tr>";
            }
        ?>
            </tbody>
        </table>
        
        
</div>

