<?php 

    $id = $_GET['id'];
    // echo $id;

    include 'database.php';
    mysqli_select_db($con,"ajax_demo");

    $editarP = "Select * from productos where id = '$id'";
    // echo $editarP;
    $editarPro = mysqli_query($con,$editarP);
    $rowX = mysqli_fetch_object($editarPro);
    // echo $rowX->nombre;

?>
<div id="container">
	<h1 id="h2Caja">Agregar Nuevo Producto!</h1>

	<div id="body">
		
            <?php
                // Generar las notificacion si termino o no 
            ?>
           <form role="form" id="insertProduct" action="actualizarProducto" method="post" role="form">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                    <select class="form-control required" id="categoria" name="categoria" maxlength="128">
                                    <?php 
                                        foreach($agregarNuevoProducto as $record)
                                            {
                                    ?>
                                            <option value="<?php echo $record->categoria; ?>"><?php echo $record->categoria; ?></option>
                                            <option value="<?php echo $record->categoria; ?>">Nada</option>
                                    <?php 
                                            }

                                    ?>
                                    </select>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control required" id="nombre" value="<?php echo $rowX->nombre; ?>" name="nombre" maxlength="128">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="marca">Marca</label>
                                <input type="text" class="form-control required" id="marca" value="<?php echo $rowX->marca; ?>" name="marca" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="peso">Peso</label>
                                <input type="text" class="form-control required equalTo" id="peso" value="<?php echo $rowX->peso; ?>" name="peso" maxlength="10">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" class="form-control required" id="cantidad" value="<?php echo $rowX->cantidad; ?>" name="cantidad" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number" class="form-control required equalTo" id="precio" value="<?php echo $rowX->precio; ?>" name="precio" maxlength="10">
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">
                    <input type="hidden" class="form-control" id="id" value="<?php echo $rowX->id; ?>" name="id">
                            <input type="submit" class="btn btn-primary" value="Actualizar" />
                            <!-- <input type="reset" class="btn btn-default" value="Limpiar" /> -->
                    </div>
            </form>
    </div>               

        <div class="col-md-4">
            <?php
                $this->load->helper('form');
                $error = $this->session->flashdata('error');
                if($error)
                {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $this->session->flashdata('error'); ?>                    
            </div>
            <?php } ?>
            <?php  
                $success = $this->session->flashdata('success');
                if($success)
                {
            ?>
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } ?>
            
            <div class="row">
                <div class="col-md-12">
                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                </div>
            </div>
        </div>
        <script src="assets/js/agregarProducto.js" type="text/javascript"></script>
  
    