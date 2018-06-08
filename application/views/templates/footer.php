<p class="footer">Pagina cargada en <strong>{elapsed_time}</strong> segundos. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>

    <script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/gsdk/gsdk-checkbox.js"></script>
    <script src="assets/gsdk/gsdk-radio.js"></script>
    <script src="assets/gsdk/gsdk-bootstrapswitch.js"></script>
    <script src="assets/js/get-shit-done.js"></script>
	<script src="assets/js/custom.js"></script>
	
	<!-- <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
    <!-- <script src="assets/dist/js/app.min.js" type="text/javascript"></script> -->
    <script src="assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="assets/js/validation.js" type="text/javascript"></script>


	<!-- <script src = "assets/js/jquery-3.1.1.js"></script>
	<script src = "assets/js/jquery-ui.js"></script>
	<script src = "assets/js/ajax.js"></script> -->
</html>
<!-- <script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script> -->
<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        "language": {
        	sortColumn: 'id',
        	"sProcessing":     "Procesando...",
		    "sLengthMenu":     "Mostrar _MENU_ registros",
		    "sZeroRecords":    "No se encontraron resultados",
		    "sEmptyTable":     "Ningún dato disponible en esta tabla",
		    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
		    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
		    "sInfoPostFix":    "",
		    "sSearch":         "Buscar:",
		    "sUrl":            "",
		    "sInfoThousands":  ",",
		    "sLoadingRecords": "Cargando...",
		    "oPaginate": {
		        "sFirst":    "Primero",
		        "sLast":     "Último",
		        "sNext":     "Siguiente",
		        "sPrevious": "Anterior"
		    },
		    "oAria": {
		        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
		    }
		        }
    } );
	} );
</script>

<script>
	function alerta(){

		swal('Cualquiera puede usar esta PC')
		// swal({
		// 	position: 'top-end',
		// 	type: 'success',
		// 	title: 'Your work has been saved',
		// 	showConfirmButton: false,
		// 	timer: 1500
		// 	})
	}
	</script>
