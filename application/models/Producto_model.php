<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Producto_model extends CI_Model
{
    function productos()
    {
        $this->db->select('*');
        $this->db->from('productos');
        $query = $this->db->get();
        return $query->result();
		
    }
	
	function agregarNuevoProducto()
    {
        $this->db->distinct();
        $this->db->select('categoria');
        $this->db->from('categoria');
        $query = $this->db->get();
        return $query->result();
        
    }
	
	function agregarCompras()
    {
        $this->db->distinct();
        $this->db->select('categoria');
        $this->db->from('productos');
        $query = $this->db->get();
        return $query->result();
        
    }

    function insertarProducto($data)
    {
        $this->db->trans_start();
        $this->db->insert('productos', $data);
        $this->db->trans_complete();

        $this->session->set_flashdata('success', 'Nuevo Producto Creado Correctamente');
    
        redirect('../agregarNuevoProducto','refresh');
    }

    function prueba($data){
        $this->db->select_sum('cantidad');
        $this->db->from('ventas');
        $this->db->where('id_producto',$data);
        $query = $this->db->get();
        return $query->result();
    }

   
}