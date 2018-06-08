<div id="container">
	<h1 id="h2Caja">Filtrar Por Fechas</h1>

	<div id="body">
		
		<form action="filtro" method="POST" accept-charset="utf-8">
			<div class="container">
			
				<div class="form-group col-lg-3">
				</div>
				<div class="form-group col-lg-3">
					<label>Fecha Inicio</label>
					<input type="text" id="datetimepicker4" class="form-control" name="fecha1">
				</div>
				<div class="form-group col-lg-3">
					<label>Fecha Fin</label>
					<input type="text" id="datetimepicker5" class="form-control" name="fecha2">
				</div>
				<div class="text-center form-group col-lg-12">
					<button class="btn sombra btn-info">Buscar</button>
				</div>
			</div>



			<!-- <div class="container text-center" style="width: 120%;"> -->
				<!-- <h2 class="text-center"></h2> -->
				
				
							
				<!-- <div class="col-lg-6" style="overflow:hidden;">
					<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<div name="fecha1" id="datetimepicker12"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6" style="overflow:hidden;">
					<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<div name="fecha2" id="datetimepicker13"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-10">
					<button class="btn btn-info">Buscar</button>
				</div> -->

				<!-- <div class="form-group col-lg-3">
					<div class="row">
						<div class='col-sm-6'>
							<input type='text' class="form-control" id='datetimepicker4' />
						</div>
						
					</div>
				</div>
				<div class="form-group col-lg-3">
					<div class="row">
						<div class='col-sm-6'>
							<input type='text' class="form-control" id='datetimepicker5' />
						</div>
						
					</div>
				</div> -->







			
			<!-- </div> -->
			<!-- <div class="text-center form-group col-lg-12"> -->
					<!-- <button class="btn btn-info">Buscar</button> -->
				<!-- </div> -->

		</form>

	</div>
	<!-- <script type="text/javascript">
		$(function () {
			$('#datetimepicker12').datetimepicker({
				inline: true,
				sideBySide: true
			});
		});
	</script>
		<script type="text/javascript">
		$(function () {
			$('#datetimepicker13').datetimepicker({
				inline: true,
				sideBySide: true
			});
		});
	</script> -->

	<script type="text/javascript">
		$(function () {
			$('#datetimepicker4').datetimepicker({
				format: ("YYYY-MM-DD HH:mm:ss")
            });
		});
	</script>
	<script type="text/javascript">
		$(function () {
			$('#datetimepicker5').datetimepicker({
				format: ("YYYY-MM-DD HH:mm:ss")
            });
		});
	</script>