<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
// $route['translate_uri_dashes'] = FALSE;

// $route['ventas'] = "ventas/ventas";
// $route['default_controller'] = 'Paginas';
$route['404_override'] = '';
$route['escritorio'] = "welcome/escritorio";
$route['ventas'] = "welcome/ventas";
$route['facturasAnuladas'] = "welcome/facturasAnuladas";
$route['getitem'] = "welcome/getitem";
$route['guardar'] = "welcome/guardar";
$route['cajachica'] = "welcome/cajachica";
$route['cierre'] = "welcome/cierre";
$route['filtro'] = "welcome/filtro";
$route['filtropordia'] = "welcome/filtropordia";
// $route['guardarcaja'] = "welcome/guardarcaja";
$route['guardarcierre'] = "welcome/guardarcierre";
// $route['insertarCaja'] = "welcome/insertarCaja";


$route['insertarCaja'] = "caja/insertarCaja";



//Productos
$route['abonomembresias'] = "welcome/abonomembresias";
$route['anular_Facturas'] = "producto/anular_Facturas";
$route['prueba'] = "producto/prueba";
$route['productos'] = "producto/productos";
$route['agregarNuevoProducto'] = "producto/agregarNuevoProducto";
$route['editarProducto'] = "producto/editarProducto";
$route['actualizarProducto'] = "producto/actualizarProducto";
$route['agregarCompras'] = "producto/agregarCompras";
$route['insertarProducto'] = "producto/insertarProducto";
$route['anularFactura'] = "producto/anularFactura";
$route['noAnularFactura'] = "producto/noAnularFactura";

$route['BuscarProducto'] = "producto/BuscarProducto";




$route['view'] = "view";