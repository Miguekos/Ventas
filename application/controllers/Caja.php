<?php

class Caja extends CI_Controller {

    function insertarCaja()
	{	
        // $this->session->set_flashdata('success', 'Nuevo Producto Creado Correctamente');
        $data = array(
            'cajachica'=>$this->input->post('cajac'),
            'accion'=>$this->input->post('accion'),
            'motivo'=>$this->input->post('motivo')
        );
        
        
		$this->load->model('caja_model');
		$result = $this->caja_model->insertarCaja($data);
		// $this->load->view('templates/header');
		// $this->load->view('insertarCaja');
		
        // $this->load->view('templates/footer');
        
	}

}
?>