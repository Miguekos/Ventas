<?php

include 'database.php';
mysqli_select_db($con,"ajax_demo");


$cajachicacierre = $_POST['cajachicac'];
$totalmemcierre = $_POST['totalmemc'];
$totalventascieere = $_POST['totalventasc'];
$totalcajacierre = $_POST['totalcajac'];

if ($totalventascieere <= 0) {
	?>
	<script>
	// swal("No puedes cerrar caja si no tienes Venta..!!");
	swal({
		title: 'No puedes cerrar caja si no tienes Venta..!!',
		text: '',
		timer: 4000,
		onOpen: () => {
			swal.showLoading()
		}
		}).then((result) => {
		if (
			// Read more about handling dismissals
			result.dismiss === swal.DismissReason.timer
		) {
			console.log('Pasaron los 4 Seg');
			window.location.replace('cierre');
		}
	})
	
	</script>
	<?php
}else{


$cajac = "insert into cierre (cajachicac, totalmemc, totalventasc, totalcajac) value ('$cajachicacierre','$totalmemcierre','$totalventascieere','$totalcajacierre')";
//echo "$cajac";
$cajac1 = mysqli_query($con,$cajac);
//$cajac2 = mysqli_fetch_array($cajac1);
//$cajac3 = $cajac2[0]; 

$cierre = $_POST['cierre'];
// echo $cierre;
$num_cierres = "insert into horadecierre (cierres) value ('$cierre')";
$result_C = mysqli_query($con,$num_cierres);
//echo "$result_C";
//$rowC = mysqli_fetch_array($result_C);
//$conteo_C = $rowC[0];
//echo "$conteo_C";
?>
<script> 

window.location.replace('cierre');

</script>
<?php 
}
?>
