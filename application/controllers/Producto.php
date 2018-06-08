<?php

class Producto extends CI_Controller {

    public function productos()
    {
        $title['index'] = '';
		$title['ventas'] = '';
		$title['filtropordia'] = '';
		$title['otro'] = 'active';
        $this->load->model('producto_model');
        $data['productos'] = $this->producto_model->productos();
        $title['pageTitle'] = 'Ventas | Productos';
        $title['Titulo'] = 'Productos';
		$this->load->view('templates/header', $title);
        $this->load->view('productos', $data, $title);
        $this->load->view('templates/footer');
    }


    function agregarNuevoProducto()
    {

        $data = array();
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        
            $title['index'] = '';
            $title['ventas'] = '';
            $title['filtropordia'] = '';
            $title['otro'] = 'active';
            $this->load->model('producto_model');
            $data['agregarNuevoProducto'] = $this->producto_model->agregarNuevoProducto();
            $title['pageTitle'] = 'Agregar Nuevo Producto';
            $title['Titulo'] = 'Agregar Nuevo Producto';
		    $this->load->view('templates/header', $title);
            $this->load->view('agregarNuevoProducto', $data, $title);
            $this->load->view('templates/footer');
    }
	
	function agregarCompras()
    {

        $data = array();
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        
            $title['index'] = '';
            $title['ventas'] = '';
            $title['filtropordia'] = '';
            $title['otro'] = 'active';
            $this->load->model('producto_model');
            $data['agregarCompras'] = $this->producto_model->agregarCompras();
            $title['pageTitle'] = 'Agregar Nuevo Producto';
            $title['Titulo'] = 'Agregar Nuevo Producto';
		    $this->load->view('templates/header', $title);
            $this->load->view('agregarCompras', $data, $title);
            $this->load->view('templates/footer');
    }
    

    public function insertarProducto()
    {
                
        $data = array(
            'categoria'=>$this->input->post('categoria'),
            'nombre'=>$this->input->post('nombre'),
            'marca'=>$this->input->post('marca'),
            'peso'=>$this->input->post('peso'),
            'cantidad'=>$this->input->post('cantidad'),
            'precio'=>$this->input->post('precio')
        );
        
        $this->load->model('producto_model');
        $result = $this->producto_model->insertarProducto($data);
        
    }

    //Escribir 0 en el estado de la factura para enular
    function anularFactura(){
        $data = array(
            'estado'=> '0'
        );
        $id = $this->input->get('id');
        $this->db->where('id_factura', $id);
        $this->db->update('ventas',$data);
        redirect('../anularFacturas','refresh');
        
    }
    //Escribir 1 en el estado de la factura para activarla
    function noAnularFactura(){
        $data = array(
            'estado'=> '1'
        );
        $id = $this->input->get('id');
        $this->db->where('id_factura', $id);
        $this->db->update('ventas',$data);
        redirect('../facturasAnuladas','refresh');
                
    }

    public function prueba(){
        $data = $this->input->get('id_producto');
        // echo $data;
        $this->load->model('producto_model');
        $result['id_producto'] = $this->producto_model->prueba($data);     
        // echo $result;
        $this->load->view('prueba',$result);
    }

    public function editarProducto(){
        $title['index'] = '';
        $title['ventas'] = '';
        $title['filtropordia'] = '';
        $title['otro'] = 'active';
        $title['pageTitle'] = 'Editar Producto';
        $title['Titulo'] = 'Editar Producto';
        $this->load->model('producto_model');
        $data['agregarNuevoProducto'] = $this->producto_model->agregarNuevoProducto();
        $this->load->view('templates/header', $title);
        $this->load->view('editarProducto', $data, $title);
        $this->load->view('templates/footer');

    }

    public function actualizarProducto()
    {
        $data = array(
            'categoria'=>$this->input->post('categoria'),
            'nombre'=>$this->input->post('nombre'),
            'marca'=>$this->input->post('marca'),
            'peso'=>$this->input->post('peso'),
            'cantidad'=>$this->input->post('cantidad'),
            'precio'=>$this->input->post('precio')
        );
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('productos',$data);
        redirect('../productos','refresh');
        
    }

    function BuscarProducto(){

        $this->load->view('BuscarProducto');


    }

    function anular_Facturas(){
        $title['index'] = '';
        $title['ventas'] = '';
        $title['filtropordia'] = '';
        $title['otro'] = 'active';
        $this->load->model('producto_model');
        $title['pageTitle'] = 'Ventas | AnularFacturas';
        $title['Titulo'] = 'Productos';
        $this->load->view('templates/header', $title);
        $this->load->view('anular_Facturas', $title);
        $this->load->view('templates/footer');
    }
}
?>