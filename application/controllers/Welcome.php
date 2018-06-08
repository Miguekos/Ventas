<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	var $data;
	public $variable = "awesome";
	public $ventas = "awesome";

    // function __construct(){
    //     parent::__construct(); // needed when adding a constructor to a controller
    //     $this->data = array(

    //     );
        // $this->data can be accessed from anywhere in the controller.
    // } 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index()
	{	
		$title['index'] = 'active';
		$title['ventas'] = '';
		$title['filtropordia'] = '';
		$title['otro'] = '';
		$title['pageTitle'] = 'GYM | Ventas';
		$this->load->view('templates/header', $title);
		$this->load->view('welcome_message');
		$this->load->view('templates/footer');
	}

	public function escritorio(){
		$this->load->view('escritorio');
	}

	public function getitem()
	{	
		// $this->load->view('templates/header');
		$this->load->view('getitem');
		// $this->load->view('templates/footer');
	}

	public function ventas()
	{	
		$title['index'] = '';
		$title['ventas'] = 'active';
		$title['filtropordia'] = '';
		$title['otro'] = '';
		$title['pageTitle'] = 'GYM | Ventas';
		$this->load->view('templates/header', $title);
		$this->load->view('ventas');
		$this->load->view('templates/footer');
	}

	public function cierre()
	{	
		$title['index'] = '';
		$title['ventas'] = '';
		$title['filtropordia'] = '';
		$title['otro'] = 'active';
		$title['pageTitle'] = 'GYM | Cierre';
		$this->load->view('templates/header', $title);
		$this->load->view('cierre');
		$this->load->view('templates/footer');
	}

	public function filtropordia()
	{	
		$title['index'] = '';
		$title['ventas'] = '';
		$title['filtropordia'] = 'active';
		$title['otro'] = '';
		$title['pageTitle'] = 'GYM | Filtro Por Dia';
		$this->load->view('templates/header', $title);
		$this->load->view('filtropordia');
		$this->load->view('templates/footer');
	}

	public function filtro()
	{	
		$title['index'] = '';
		$title['ventas'] = '';
		$title['filtropordia'] = '';
		$title['otro'] = 'active';
		$title['pageTitle'] = 'GYM | Filtro';
		$this->load->view('templates/header', $title);
		$this->load->view('filtro');
		$this->load->view('templates/footer');
	}

	public function cajachica()
	{	
		$data = array();
        $data['error'] = $this->session->flashdata('error');
		$data['success'] = $this->session->flashdata('success');
		
		$title['index'] = '';
		$title['ventas'] = '';
		$title['filtropordia'] = '';
		$title['otro'] = 'active';
		$title['pageTitle'] = 'GYM | Caja Chica';
		$this->load->view('templates/header', $title);
		$this->load->view('cajachica', $data);
		$this->load->view('templates/footer');
	}

	public function guardar()
	{	
		// $title['index'] = '';
		// $title['ventas'] = '';
		// $title['filtropordia'] = '';
		// $title['otro'] = 'active';
		// $this->load->view('templates/header', $title);
		$this->load->view('guardar');
		// $this->load->view('templates/footer');
	}
	
	public function guardarcierre()
	{	
		$title['index'] = '';
		$title['ventas'] = '';
		$title['filtropordia'] = '';
		$title['otro'] = 'active';
		$this->load->view('templates/header', $title);
		$this->load->view('guardarcierre');
		// $this->load->view('templates/footer');
	}

	function facturasAnuladas(){
        $title['index'] = '';
		$title['ventas'] = '';
		$title['filtropordia'] = '';
		$title['otro'] = 'active';
        // $this->load->model('ventas_model');
        // $data['facturasAnuladas'] = $this->ventas_model->facturasAnuladas();
        $title['pageTitle'] = 'GYM | Facturas Anuladas';
        $title['Titulo'] = 'F. Anuladas';
		$this->load->view('templates/header', $title);
        $this->load->view('facturasAnuladas', $title);
        $this->load->view('templates/footer');
                
	}

		public function abonomembresias()
	{	
		$title['index'] = '';
		$title['ventas'] = '';
		$title['filtropordia'] = '';
		$title['otro'] = '';
		$title['pageTitle'] = 'GYM | Abono Membresias';
		$this->load->view('templates/header', $title);
		$this->load->view('abonomembresias');
		$this->load->view('templates/footer');
	}
	

	// function facturasAnuladas(){
		// $this->db->select('id_factura');
		// $this->db->from('ventas');
        // $this->db->where('estado','0');
        // $this->db->order_by('id_factura', 'DESC');
		// $cantidad = $this->db->get();
		// $resultado['resultado'] = $cantidad->result();
		// echo $resultado;
		// $resultado = $cantidad->result();

		// $x = 1;
        // while ($maxCantidad >= $x) {
        //     $this->db->select('id_factura','hora');
        //     $this->db->where('id_factura',$x);
        //     $this->db->where('estado','0');
		// 	$maxFactura['maxFactura'] = $this->db->get('ventas');
		// 	$maxFactura['maxFactura'] = $facturas->num_rows();
        //     echo $maxFactura;

        //     $this->db->select_sum('total');
        //     $this->db->where('id_factura',$x);
        //     $this->db->where('estado','0');
		// 	$totalVentas = $this->db->get('ventas');
		// 	$maxCantidad = $totalVentas->num_rows();
		// 	echo $maxTotalVentas;
        //     $x = $x + 1;
		// }
			// $title['index'] = '';
			// $title['ventas'] = '';
			// $title['filtropordia'] = '';
			// $title['otro'] = 'active';
			// $title['pageTitle'] = 'GYM | Caja Chica';
			// $this->load->view('templates/header', $title);
			// $this->load->view('facturasAnuladas');
		// 	$this->load->view('templates/footer');
        
    // }

}
