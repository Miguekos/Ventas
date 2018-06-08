<div id="container">
	<h1 id="h2Caja"><?php echo $Titulo ?><a type="button" class="btn btn-xs btn-primary pull-right" href="agregarNuevoProducto">Agregar</a></h1>
    
    <div id="body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
	                    <tr>
	                      <th>Id</th>
	                      <th>Categoria</th>
	                      <th>Nombre</th>
	                      <th>Marca</th>
	                      <th class="text-center">Peso</th>
	                      <th class="text-center">Cantidad</th>
	                      <th class="text-center">Precio</th>
	                      <th class="text-center">Accion</th>
	                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!empty($productos))
                    {
                        foreach($productos as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->id ?></td>
                      <td><?php echo $record->categoria ?></td>
                      <td><?php echo $record->nombre ?></td>
                      <td><?php echo $record->marca ?></td>
                      <td class="text-center"><?php echo $record->peso ?></td>
                      <td class="text-center"><?php echo $record->cantidad ?></td>
                      <td class="text-center"><?php echo "<b>" . $record->precio . "</b> S/" ?></td>
                      <td class="text-center">
                          <a type="button" class="btn btn-xs btn-warning" href="editarProducto?id=<?php echo $record->id ?>">Editar</a>
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
        </table>

    </div>

