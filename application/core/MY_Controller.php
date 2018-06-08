<?php
class MY_Controller Extends CI_Controller
{

  function index()
  {
     $data['page_title'] = 'Pagina de Prueba';
     $this->load->view('header');
     $this->load->view('view', $data);
     $this->load->view('footer');
  }
}
?>