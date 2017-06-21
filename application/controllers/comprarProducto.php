<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comprarProducto extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('grocery_CRUD');
        $this->load->model('SecurityUser');
        date_default_timezone_set("America/Guayaquil");
	}


  public function comprarProducto(){
    $titulo = "Dimquality::Admin - Compra Producto";
    $dataHeader['titlePage'] = $titulo;
    $this->load->view('web/header', $dataHeader);
    $this->load->view('web/comprarProducto');
    $this->load->view('web/footer');

    if($this->form_validation->run() == true){
          $this->session->set_userdata('mensaje_exito', 'Tu compra se ha realizado con éxito, por favor revise su e-mail'); 
          redirect('web/catalogo');
        }else{
          $data['mensaje_error'] = 'Ha ocurrido un problema, intente más tarde';
        }
    }
    $data['user'] = $userData;
 }

