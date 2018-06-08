<?php 
// if(!defined('BASEPATH')) exit('No direct script access allowed');

class Caja_model extends CI_Model
{

    function insertarCaja($data)
    {
    	$validar = $this->input->post('accion');
    	if ($validar != "0") {
    		$this->db->trans_start();
        	$this->db->insert('control', $data);
        	$this->db->trans_complete();
        
        	$this->session->set_flashdata('success', 'Nuevo Producto Creado Correctamente');

        	redirect('../cajachica','refresh');
    		
    	}else{
    		echo "<script> alert('Por favor eliga una opcion valida Deposito/Retiro'); </script>";
    		redirect('../cajachica','refresh');
    	}

    }

}