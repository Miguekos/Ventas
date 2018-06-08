<div id="container">
	<h1 id="h2Caja">Agregar Compras</h1>

	<div id="body">

            <?php
                // Generar las notificacion si termino o no 
            ?>   
            <!-- <form role="form" id="insertProduct" action="insertarProducto" method="post" role="form"> -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control required" id="nombre"  name="nombre" maxlength="128">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Razon Social</label>
                                <input type="text" class="form-control required" id="nombre"  name="nombre" maxlength="128">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="marca">Factura</label>
                                <input type="text" class="form-control required" id="marca"  name="marca" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="peso">Serial</label>
                                <input type="text" class="form-control required equalTo" id="peso" name="peso" maxlength="10">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Direccion</label>
                                <input type="text" class="form-control required" id="nombre"  name="nombre" maxlength="128">
                            </div>
                        </div>
                    </div>



    <script type="text/javascript">
  // Refresca Producto: Refresco la Lista de Productos dentro de la Tabla
  // Si es vacia deshabilito el boton guardar para obligar a seleccionar al menos un producto al usuario
  // Sino habilito el boton Guardar para que pueda Guardar
    function RefrescaProducto(){
        var ip = [];
        var i = 0;
        $('#guardar').attr('disabled','disabled'); //Deshabilito el Boton Guardar
        $('.iProduct').each(function(index, element) {
            i++;
            ip.push({ id_pro : $(this).val() });
        });
        // Si la lista de Productos no es vacia Habilito el Boton Guardar
        if (i > 0) {
            $('#guardar').removeAttr('disabled','disabled');
        }
        var ipt=JSON.stringify(ip); //Convierto la Lista de Productos a un JSON para procesarlo en tu controlador
        $('#ListaPro').val(encodeURIComponent(ipt));
    }
       function agregarProducto() {

            var sel = $('#pro_id').find(':selected').val(); //Capturo el Value del Producto
            var text = $('#pro_id').find(':selected').text();//Capturo el Nombre del Producto- Texto dentro del Select
           
            
            var sptext = text.split();
            
            var newtr = '<tr class="item"  data-id="'+sel+'">';
            newtr = newtr + '<td class="iProduct" >' + 23 + '</td>';
            newtr = newtr + '<td><input  class="form-control iProduct" id="Producto" name="Producto" value="'+ sel +'" required /></td>';
            newtr = newtr + '<td><input  class="form-control" id="Categoria" name="categoria" value="" required /></td>';
            newtr = newtr + '<td><input  class="form-control" id="Cantidad" name="cantidad" value="" required /></td>';
            newtr = newtr + '<td><input  class="form-control" id="Precio" name="precio" value="" required /></td>';
            newtr = newtr + '<td><input  class="form-control" id="total" name="total" value="" required /></td>';
            newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"><i class="fa fa-times">Eliminar</i></button></td></tr>';
            
            $('#ProSelected').append(newtr); //Agrego el Producto al tbody de la Tabla con el id=ProSelected
            
            RefrescaProducto();//Refresco Productos
                
            $('.remove-item').off().click(function(e) {
                $(this).parent('td').parent('tr').remove(); //En accion elimino el Producto de la Tabla
                if ($('#ProSelected tr.item').length == 0)
                    $('#ProSelected .no-item').slideDown(300); 
                RefrescaProducto();
            });        
           $('.iProduct').off().change(function(e) {
                RefrescaProducto();
           });
    }
</script>


    <div class="container">
        <from>
            <h2>Productos</h2>
            <!-- Trigger the modal with a button -->
            
            <input type="hidden" id="ListaPro" name="ListaPro" value="" required />
            <table id="TablaPro" class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Categoria</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="ProSelected"><!--Ingreso un id al tbody-->
                    <tr>
                 
                    </tr>
                </tbody>
            </table>
            <!--Agregue un boton en caso de desear enviar los productos para ser procesados-->
        </from>

        <div class="content">
            <div class="body">
                 <div class="form-group">
                        <select class="selectpicker form-control" id="pro_id" name="pro_id" data-width='100%' >
                                <option value=""></option>
                                <option value="Lentes">Lentes</option>
                                <option value="Casco">Casco</option>
                                <option value="Gorra">Gorra</option>
                        </select>
                </div>
            </div>
            <div class="footer">
                <!--Uso la funcion onclick para llamar a la funcion en javascript-->
                <button type="button" onclick="agregarProducto()" class="btn btn-default" data-dismiss="">Agregar</button>
            </div>
        </div>
    </div>


    </div>               


<!-- <tbody id="productos">
</tbody> -->
<input type="text" name="entrada" id="productos" class="form-control">
.....
.....
<button type="button" class="btn btn-default" data-dismiss="modal" id="agregarProducto">Agregar</button>

<script type="text/javascript">
$( "#agregarProducto" ).click(function() {
        var getId = $("#producto").val();
        $.ajax({
              method: "POST",
              url: "BuscarProducto",
              data: { id: getId }
    })
      .done(function( msg ) {
          $("#productos").html(msg);
      });
    });

</script>
        
		
		
    <!-- <script>
    // append row to the HTML table
    function appendRow() {
      console.log("AgregarRow");
        var tbl = document.getElementById('my-table'), // table reference
            row = tbl.insertRow(tbl.rows.length),      // append table row
            i;
        // insert table cells to the new row
        for (i = 0; i < tbl.rows[0].cells.length; i++) {
            createCell(row.insertCell(i), 'text', 'form-control',"linea"+i);
        }
        
    }
     
    // create DIV element and append to the table cell
    // function createCell(cell, text, style) {
    //     var div = document.createElement('input'), // create DIV element
    //         txt = document.createTextNode(text); // create text node
    //     div.appendChild(txt);                    // append text node to the DIV
    //     div.setAttribute('class', style);        // set DIV class attribute
    //     div.setAttribute('class', style);        // set DIV class attribute
    //     div.setAttribute('className', style);    // set DIV class attribute for IE (?!)
    //     cell.appendChild(div);                   // append DIV to the table cell
    // }

    function createCell(cell, text, style, numero) {
        var div = document.createElement('input'); // create DIV element
            // txt = document.createTextNode(text); // create text node
        // div.appendChild(txt);                    // append text node to the DIV
    	//div.setAttribute('type', text);        // set DIV class attribute
        div.setAttribute('type', text);        // set DIV class attribute
        div.setAttribute('class', style);        // set DIV class attribute
    	div.setAttribute('id', numero);        // set DIV class attribute
        // div.setAttribute('class', style);        // set DIV class attribute
        div.setAttribute('className', style);    // set DIV class attribute for IE (?!)
        cell.appendChild(div);                   // append DIV to the table cell
    }
    </script>
       -->
    