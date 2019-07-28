<?php
/**
 * 
 */
class Clogin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('mlogin');
	}

	public function index(){
		$this->load->view ('Users/layout/header');
		$this->load->view ('Users/layout/menu');
		$this->load->view ('Home/login');
		$this->load->view ('Users/layout/footer');
	}

	public function ingresar(){
		$correo=$this->input->post('correo');
		$pass=base64_encode($this->input->post('password'));

		$res=$this->mlogin->ingresar($correo,$pass);		
		if ($res==1) {
			redirect(base_url()."cAdmin/index");
		}else if($res==2){	
			redirect(base_url()."cUser/index");
		}else{
			$this->session->set_flashdata('Mensaje', 'Correo y/o Contraseña Incorrecta');
			redirect(base_url()."Clogin/index");
		}
	}
}